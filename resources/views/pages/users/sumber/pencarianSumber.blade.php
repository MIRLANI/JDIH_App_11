<section id="multiple-column-form" class="full-background "
    style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center;">
    <div class="row match-height">
        <div class="col-11 mx-auto">
            <div class="d-flex justify-content-between align-items-center my-5">
                <h2 class="mb-0 mx-5" style="color: white;">Sumber Peraturan</h2>
                <form class="form my-0" method="GET" action="{{ route("searchSumber") }}">
                    <div class="d-flex align-items-center">
                        <input type="text" id="first-name-column" class="form-control p-2 me-2" placeholder="Keyword"
                            name="keyword"  value="{{ request()->input("keyword") }}">
                        <button type="submit" class="btn btn-primary px-4 py-2">Search</button>
                        <a id="resetButton" href="{{ route("sumber") }}" class=" px-4 py-2" style="display: none; color: red">Reset</a>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    const inputField = document.getElementById('first-name-column');
    const resetButton = document.getElementById('resetButton');
    if (inputField.value.length > 0) {
        resetButton.style.display = 'inline';
    }
    inputField.addEventListener('input', function() {
        if (this.value.length > 0) {
            resetButton.style.display = 'inline';
        } else {
            resetButton.style.display = 'none';
        }
    });
</script>
