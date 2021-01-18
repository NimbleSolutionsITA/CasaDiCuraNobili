
@extends('main')

@section('title', trans('app.doctors'))

@section('content')

    @include('pages.partials.breadcrumb')

    <!--************************************
            Main Start
    *************************************-->
    <main id="th-main" class="th-main th-haslayout">

        @include('pages.partials.doctors-gallery')

    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection

@section('extra-css')
    <style>

        .th-navfilterbale [class^="icon-"]:before,
        .th-navfilterbale [class*=" icon-"]:before,
        .th-navfilterbale [class^="icon-"]:after,
        .th-navfilterbale [class*=" icon-"]:after {
            font-size: 40px;
        }

        /**
 * Tooltip Styles
 */

        /* Add this attribute to the element that needs a tooltip */
        [data-tooltip] {
            position: relative;
            z-index: 2;
            cursor: pointer;
        }

        /* Hide the tooltip content by default */
        [data-tooltip]:before,
        [data-tooltip]:after {
            visibility: hidden;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
            opacity: 0;
            pointer-events: none;
        }

        /* Position tooltip above the element */
        [data-tooltip]:before {
            position: absolute;
            bottom: 150% !important;
            left: 50% !important;
            margin-bottom: -15px;
            margin-left: -80px;
            padding: 7px;
            width: 160px !important;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background-color: #859CC9 !important;
            color: white;
            content: attr(data-tooltip) !important;
            text-align: center;
            font-size: 14px;
            line-height: 1.2;
            height: auto !important;
        }

        /* Triangle hack to make tooltip look like a speech bubble */
        [data-tooltip]:after {
            position: absolute;
            bottom: 118%;
            left: 50%;
            margin-left: -5px;
            width: 0;
            border-top: 5px solid #859CC9;
            border-right: 5px solid transparent;
            border-left: 5px solid transparent;
            content: " ";
            font-size: 0;
            line-height: 0;
        }

        /* Show tooltip content on hover */
        [data-tooltip]:hover:before,
        [data-tooltip]:hover:after {
            visibility: visible;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
            opacity: 1;
        }

    </style>
@endsection