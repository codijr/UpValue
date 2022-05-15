<div class="card-solutions bg-neutral d-flex flex-column align-items-center px-3 w-100 rounded-3">
    <div class="my-2 py-2  d-flex flex-column align-items-center">
        <img class="mb-3" src="<?php echo $imgUrl ?>" alt="">
        <h4><?php echo $title ?></h4>
    </div>
    
    <ul class="mb-2 ps-0">
        <li>
            <p class="body-2">Comercial</p>
            <p class="body-2">Financeiro</p>
            <p class="body-2">Estoque</p>
            <p class="body-2">Compras</p>
            <p class="body-2">Curadoria</p>
            <div class="collapse" id="collapse">
                <p class="body-2">Curadoria</p>
            </div>
        </li>
    </ul>

    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
        <p class="caption">Ver mais</p>
  </button>

</div>