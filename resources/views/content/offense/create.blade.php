<div class="modal fade text-left" id="modalCreate"data-bs-backdrop="static" tabindex="-1" role="dialog"
aria-labelledby="staticBackDropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="staticBackDropLabel">Tambah Kasus</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close">
            <i data-feather=></i>
        </button>
    </div>

   
        <div class="modal-body">
            <form action="{{route('offense.store')}}" method="POST"   >
                    @csrf
                    <div class="mb-3"></div>
                        <label for="name">Nama Kasus</label>          
                        <input type="text"  id="name" name = "name" class="form-control @error ('name') is-invalid @enderror" value "{{old('name')}}">

                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1"data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>