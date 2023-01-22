@extends(backpack_view('blank'))

@section('header')
    <section class="container-fluid">
        <h2>
            <span class="text-capitalize">Import Excel file</span>
        </h2>
    </section>
@endsection

@section('content')
    <div class="">
        <div class="bold-labels">
            @if ($errors->any())
                <div class="pb-0 alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li><i class="la la-info-circle"></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="/import">
                @csrf
                <div class="flex flex-col p-4 bg-white rounded-xl">

                 
                </div>

                <div id="saveActions" class="pt-2 form-group">
                    <input type="hidden" name="_save_action" value="save_list">
                    <button type="submit" class="btn btn-success">
                        <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                        <span data>save</span>
                    </button>
                    <div class="btn-group" role="group">
                    </div>
                    <a href="{{ url($crud->route) }}" class="btn btn-default"><span class="la la-ban"></span>
                        &nbsp;Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
