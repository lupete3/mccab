<section class="team-section" id="team">
    <div class="container">
        <div class="section-header">
            <h2>Notre Équipe d'Experts</h2>
            <p>Des avocats passionnés et dévoués à la défense de vos intérêts</p>
        </div>
        <div class="team-grid">
            @foreach($teamMembers as $member)
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('uploads/' .$member->photo) }}" alt="{{ $member->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="member-info">
                        <h3>{{ $member->name }}</h3>
                        <p class="title">{{ $member->title }}</p>
                        <p class="specialty">{{ $member->specialty }}</p>
                        <div class="member-social">
                            <a href="{{ $member->linkedin_url }}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{ $member->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $member->twitter_url }}"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
