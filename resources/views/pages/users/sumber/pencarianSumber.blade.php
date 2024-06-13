<section id="multiple-column-form" class="full-background"
style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center; background-attachment: fixed; width: 100%;">
<div class="container">
    <div class="row match-height">
        <div class="col-11 mx-auto">
            <div class="row  my-5">
                <div class="col-12 col-md-6">
                    <h2 class="mb-0" style="color: white;">Sumber Peraturan</h2>
                </div>
                <div class="col-12 col-md-6">
                    <form class="form my-0" method="GET" action="{{ route("searchSumber") }}">
                        <div class="d-flex align-items-center mt-3">
                            <input type="text" id="first-name-column" class="form-control pt-2 me-2" placeholder="Keyword"
                                name="keyword"  value="{{ request()->input("keyword") }}">
                            <button type="submit" class="btn btn-primary px-4 py-2">Search</button>
                            <a id="resetButton" href="{{ route("sumber") }}" class=" px-4 py-2" style="display: none; color: red">Reset</a>
                        </div>
                    </form>
                </div>
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
