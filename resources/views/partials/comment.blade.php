<section class="page-section bg-primary mb-0" id="comment">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Comment</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center mx-2">
            @foreach ($comments as $comment)
                <div class="card mb-2">
                    <div class="card-body" style="margin: 1% 0 1% 0;">
                        <div class="d-flex align-items-center" style="margin: 1% 0 1% 0;">
                            <span class="fw-bold"
                                style="margin: 0 0.5% 0 0.5%;">{{ $comment->UserName }}</span>
                            <img src="https://cdn.discordapp.com/attachments/895156326865444904/925660417525686302/star.png"
                                style="width: 2vh; height: 2vh; margin: 0 0.2% 0 0.5%;" alt="">
                            <span style="margin: 0 0 0 0.2%;">{{ $comment->Rating }}</span>
                        </div>
                        <div style="margin: 1% 0 1% 0;">
                            <p>{{ $comment->CommentBody }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
