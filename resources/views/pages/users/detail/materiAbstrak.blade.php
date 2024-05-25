<div class="card my-3 p-2">
    <div class="card-body d-flex justify-content-between align-items-center" style="border-radius: 2000px; color: black;">
        <div class="d-flex align-items-center">
            <i class="bi mb-4 bi-bookmark-fill me-3 align-self-center" style="font-size: 24px;"></i>
            <h6 class="mb-0 align-self-center">MATERI POKOK PERATURAN</h6>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#large" class="btn btn-primary px-4">Abstrak</button>
    </div>
    <hr class="mt-0 mx-auto" style="width: 95%;">
    <div class="card-body mx-2">


        <p> {{ optional($detailHukum->abstrakHukum ?? null)->materi_pokok }}
        </p>
    </div>
</div>


@include('pages.users.modalAbstra')
