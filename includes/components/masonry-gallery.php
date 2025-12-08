<div class="masonry-gallery">

    <section class="masonry-gallery-section">
         <div class="container">
            <h2 class="masonry-gallery_tab_title">Gallery </h2>
        </div>

            <main class="masonry-gallery-container">
                <div class="item-1">
                <div class="img-wrapper" onclick="openLightbox(0)">
                    <img class="img" src="https://picsum.photos/500/400" alt="Image 1">
                </div>
                </div>
                <div class="item-2">
                <div class="img-wrapper" onclick="openLightbox(1)">
                    <img class="img" src="https://picsum.photos/500/600" alt="Image 2">
                </div>
                </div>
                <div class="item-3">
                <div class="img-wrapper" onclick="openLightbox(2)">
                    <img class="img" src="https://picsum.photos/500/400" alt="Image 3">
                </div>
                </div>
                <div class="item-4">
                <div class="img-wrapper" onclick="openLightbox(3)">
                    <img class="img" src="https://picsum.photos/500/400" alt="Image 4">
                </div>
                </div>
                <div class="item-5">
                <div class="img-wrapper" onclick="openLightbox(4)">
                    <img class="img" src="https://picsum.photos/500/400" alt="Image 5">
                </div>
                </div>
            </main>

            <div class="lightbox" id="lightbox" onclick="closeLightbox(event)">
                <div class="lightbox-content">
                <button class="lightbox-close" onclick="closeLightbox(event)">×</button>
                <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1, event)">‹</button>
                <img class="lightbox-img" id="lightbox-img" src="" alt="Lightbox image">
                <button class="lightbox-nav lightbox-next" onclick="changeImage(1, event)">›</button>
                </div>
            </div>

        </div>

    </section>
</div>

