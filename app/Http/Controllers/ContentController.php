<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use Illuminate\Http\Request;
use App\Content;
use App\Department;
use App\Service;
use App\Doctor;
use App\News;
use App\Document;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\DocContactMail;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Redirect;


class ContentController extends Controller
{
    // VISTA pagina HOME
    public function index() {
        
        $contents = Content::all()->wherein('key', ['home-dipartimenti']);
        $sanitario = Doctor::first()->sanitario();
        return view('pages.home', compact('contents', 'sanitario'));
    }

    // VISTA pagina struttura
    public function struttura($anchor = 'mission') {
        
        $contents = Content::all()->wherein('key', ['mission', 'qualita', 'codice-etico', 'azienda', 'gruppo', 'gallery']);
        return view('pages.la_struttura', compact('contents', 'anchor'));
    }

    // VISTA pagina amministrazione trasparente
    public function trasparenza($anchor = 'bilanci') {
        $sections = [
            'bilanci',
            'attestazione-2019',
            'rischio-clinico',
            'carta-servizi',
            'tutela-privacy'
        ];
        $contents = Content::all()->wherein('key', $sections);
        $documents = Document::all()->wherein('doc_type', $sections)->sortByDesc('date');
        return view('pages.trasparenza', compact('contents', 'documents', 'anchor'));
    }

    // VISTA pagina attività
    public function attivita() {
        $departments = Department::all();
        $intro = Content::all()->wherein('key', ['attivita'])->first();
        return view('pages.attivita', compact('departments', 'intro'));
    }

    // VISTA pagina dipartimento
    public function dipartimento($dipartimento) {
        $department = Department::all()->where('slug', $dipartimento)->first();
        if (empty($department))
            return abort(404);
        $services = Service::where('department_id', $department->id);
        $director = Doctor::where('id', $department->director_id)->first();
        $sanitario = Doctor::first()->sanitario();
        $team = $department->doctors;
        return view('pages.dipartimenti', compact('department', 'services', 'director', 'team', 'sanitario'));
    }

    // VISTA pagina Servizio
    public function servizio($dipartimento, $servizio) {
        $department = Department::all()->where('slug', $dipartimento)->first();
        if (empty($department))
            return abort(404);
        $service = Service::all()->where('slug', $servizio)->first();
        if (empty($service))
            return abort(404);
        $head = Doctor::all()->where('id', $service->head_id)->first();
        $team = $service->doctors;
        return view('pages.servizi', compact('department', 'service', 'head', 'team'));
    }

    // VISTA pagina accoglienza
    public function accoglienza() {
        
        $departments = Department::all();
        $generali = Content::where('key', 'LIKE', 'accoglienza-%')->get();
        return view('pages.accoglienza', compact('generali', 'departments'));
    }

    // VISTA pagina medici
    public function medici() {
        $departments = Department::all();
        $services = Service::all();
        $heads = collect([]);
        foreach ($services as $service) {
            $heads->push($service->head);
        }
        $heads = $heads->unique('fullname');
        $heads->values()->all();
        $doctors = Doctor::all();
        return view('pages.medici', compact('doctors', 'departments', 'heads'));
    }

    // VISTA pagina medico
    public function medico($id, $slugfullname) {
        $doctor = Doctor::find($id);
        if (empty($doctor))
            return abort(404);
        // Attach span tag to title excluding first word
        // Split on spaces.
        $title = preg_split("/\s+/", $doctor->fullName());
        // Replace the first word.
        $title[0] = $title[0] . "<span>&nbsp;";
        // Replace the last word.
        $index = count( $title ) - 1;
        $title[$index] = $title[$index] . "</span>";
        // Re-create the string.
        $title = join(" ", $title);
        return view('pages.medico', compact('doctor', 'title'));
    }

    // VISTA pagina categoria
    public function newsCat($category) {
        $categoria = Category::all()->where('slug', $category)->first();
        if (empty($categoria))
            return abort(404);
        $posts = Post::where('category_id', $categoria->id)->paginate(4);
        $categories = Category::all();
        return view('pages.news', compact('posts', 'categories', 'categoria'));
    }

    // VISTA pagina news
    public function news($category = null) {
        if($category) {
            $catid =  Category::where('slug', $category)->first()->id;
            $posts = News::where('status', 'PUBLISHED')->where('category_id', $catid)->orderBy('updated_at', 'desc')->paginate(4);
        }
        else
            $posts = News::where('status', 'PUBLISHED')->orderBy('updated_at', 'desc')->paginate(4);

        return view('pages.news', compact('posts', 'category'));
    }

    // VISTA pagina singola notizia
    public function notizia($category, $slug) {
        $categoria = Category::where('slug', $category)->first();
        if (empty($categoria))
            return abort(404);
        $post = News::where('slug', $slug)->first();
        if (empty($post))
            return abort(404);
        if ($categoria->id == $post->category_id)
            return view('pages.notizia', compact('post', 'category'));
        else
            return abort(404);
    }

    // VISTA pagina Privacy Policy
    public function privacyPolicy() {
        $content = Content::all()->where('key', 'privacy-policy')->first();
        return view('pages.privacy-policy', compact('content'));
    }

    // VISTA pagina contatti
    public function contatti() {
        $content = Content::where('key', 'contatti')->first();
        return view('pages.contatti', compact('content'));
    }

    // FORM pagina contatti
    public function postContatti(Request $request) {
        $content = Content::where('key', 'contatti')->first();

        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:3',
            'subject' => 'min:3',
            'honeypot_name' => 'honeypot',
            'honeypot_time' => 'required|honeytime:5'
        ]);

        $data = array(
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
        );

        Mail::to(setting('informazioni-generali.email'))->send(new ContactMail($data));

        // check for failures
        if (Mail::failures()) {
            return view('pages.contatti', compact('content'))->withErrors('Messaggio non inviato correttamente');
        }
        else
            return view('pages.contatti', compact('content'))->withSuccess('Messaggio inviato correttamente');
    }

    // FORM personale per ogni medico
    public function docContact(Request $request) {
        $doctor = Doctor::find($request->doctor);
        if (empty($doctor))
            return abort(404);
        // Attach span tag to title excluding first word
        // Split on spaces.
        $title = preg_split("/\s+/", $doctor->fullName());
        // Replace the first word.
        $title[0] = $title[0] . "<span>&nbsp;";
        // Replace the last word.
        $index = count( $title ) - 1;
        $title[$index] = $title[$index] . "</span>";
        // Re-create the string.
        $title = join(" ", $title);

        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:3',
            'subject' => 'min:3',
            'honeypot_name' => 'honeypot',
            'honeypot_time' => 'required|honeytime:5'
        ]);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
            'doctor' => $request->doctor
        );

        Mail::to($request->toEmail)->send(new DocContactMail($data));

        // check for failures
        if (Mail::failures()) {
            return view('pages.medico', compact('doctor', 'title'))->withErrors('Messaggio non inviato correttamente');
        }
        else
            return view('pages.medico', compact('doctor', 'title'))->withSuccess('Messaggio inviato correttamente');

    }

    // FORM appuntamenti in header
    public function postHeadForm(Request $request) {

        $contents = Content::all()->wherein('key', ['home-dipartimenti']);

        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:3',
            'subject' => 'min:3',
            'honeypot_name' => 'honeypot',
            'honeypot_time' => 'required|honeytime:5'
        ]);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'age' => $request->age,
            'date' => $request->date,
            'subject' => $request->subject,
            'message' => $request->message,
            'department' => $request->department
        );

        Mail::to(Department::find($request->department)->email)->send(new AppointmentMail($data));

        // check for failures
        if (Mail::failures()) {
            return view('pages.home', compact('contents'))->withErrors('Messaggio non inviato correttamente');
        }
        else
            return view('pages.home', compact('contents'))->withSuccess('Messaggio inviato correttamente');
    }
}
