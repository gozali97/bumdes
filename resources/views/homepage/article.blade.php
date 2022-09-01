<div class="container-lg p-5">
   <div class="row">
      <div class="col-6">
         <h3 style="font-weight: 700">Artikel terbaru</h3>
      </div>
      <div class="col-6 text-end">
         <!-- link semua artikel -->
         <a href="" class="link-success text-decoration-none">Lihat semua <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      @foreach ($articles as $article)
         <div class="col-sm-6 col-md-4 my-3">
            <!-- link artikel -->
            <a href="{{  $article['link']  }}" class="text-decoration-none link-dark" target="_blank">
               <div class="card card-body rounded-5 h-100 border-0 shadow">
                  <div class="overflow-hidden rounded-5">
                     <!-- gambar artikel -->
                     <img src="{{ $article['featured_image_urls']['chromenews-medium'][0] }}" alt="" class="img-fluid w-100">
                  </div>
                  <!-- judul artikel -->
                  <h6 class="my-3">{!! $article['title']['rendered'] !!}</h6>
                  <!-- tanggal artikel -->
                  <p class="text-secondary small my-0">{{ \Carbon\Carbon::parse($article['date'])->isoFormat('D MMMM Y') }}</p>
               </div>
            </a>
         </div>
      @endforeach
      
   </div>
</div>
