<div class="modal fade" id="test-category-{{ $test->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <div class="card h-100 shadow-lg">


                <div class="card-body text-center">
                    <a class="btn btn-outline-primary btn-lg"
                        href="{{ route('listening.test', ['id' =>  $test->id]) }}"
                        style="border-radius:30px">Listening Test</a>
                </div>
                <div class="card-body text-center">
                    <a class="btn btn-outline-primary btn-lg"
                        href="{{ route('reading.test', ['id' =>  $test->id]) }}" style="border-radius:30px"> Reading Test </a>
                </div>
            </div>
        </div>
        <!--end::Modal content-->
    </div>
  
</div>
