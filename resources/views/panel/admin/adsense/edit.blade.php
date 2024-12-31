@extends('panel.layout.app')
@section('title', __('Google Adsense'))
@section('content')
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
                    <a href="{{ LaravelLocalization::localizeUrl( route('dashboard.admin.adsense.list') ) }}" class="page-pretitle flex items-center">
                        <svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
                        </svg>
                        {{__('Back to Google Adsense')}}
                    </a>
                    <h2 class="page-title mb-2">

                        {{__('Google Adsense Edit')}}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body pt-6">
        <div class="container-xl">
            <div class="col-md-5 mx-auto ">
                <div class="card-header">
                       <h3 class="mb-4">{{__('Edit Google Adsense Code:')}} <span class="font-bold text-primary">{{$item->type}}</span></h3>
                </div>
                <hr>
                <form id="adsense_form">
                    <div class="mb-[20px]">
                        <label class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="status" {{ $item->status == 'active' ? 'checked' : '' }}>
                            <span class="form-check-label">{{ __('Adsense Status') }}</span>

                        </label>
                    </div>
                    <div class="mb-[20px]">
                        <label class="form-label">{{__('Adsense Code')}}</label>
                        <textarea class="form-control" id="code" name="code"  rows="5">{{$item->code}}</textarea>
                    </div>
                    <button type="submit" id="adsense_button" class="btn btn-primary w-100">
                        {{__('Save')}}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#adsense_form').on('submit', function(e) {
                e.preventDefault();
                //add form data
                var formData = new FormData(this);
                document.getElementById( "adsense_button" ).disabled = true;
                document.getElementById( "adsense_button" ).innerHTML = "Please Wait...";

                formData.append( 'status', $( "#status" ).is(":checked") ? 'active' : 'passive' );
                formData.append('code', $( "#code" ).val());
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax( {
                    type: "post",
                    url: "{{route('dashboard.admin.adsense.update', $item->id)}}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function ( data ) {
                        toastr.success( 'Adsense saved succesfully. Redirecting...' );
                        document.getElementById( "adsense_button" ).disabled = false;
                        document.getElementById( "adsense_button" ).innerHTML = "Save";
                        setTimeout( function () {
                            location.href = '/dashboard/admin/adsense/'
                        }, 1000 );
                    },
                    error: function ( data ) {
                        var err = data.responseJSON.errors;
                        $.each( err, function ( index, value ) {
                            toastr.error( value );
                        } );
                        document.getElementById( "adsense_button" ).disabled = false;
                        document.getElementById( "adsense_button" ).innerHTML = "Save";
                    }
                } );
            });
        });

    </script>
@endsection