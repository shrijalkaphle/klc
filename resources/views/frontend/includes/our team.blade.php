<div class="advisor-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-advisor-item">
                    <div class="advisor-image">
                        <img src="images/{{ $team->image }}" alt="image" />
                        <ul class="social-link">
                            @if($team->facebook)
                                <li> <a href="https://www.facebook.com/{{$team->facebook}}/" class="d-block" target="_blank"><i class="bx bxl-facebook"></i></a> </li>
                            @endif
                            @if($team->twitter)
                                <li> <a href="https://twitter.com/{{$team->twitter}}" class="d-block" target="_blank"><i class="bx bxl-twitter"></i></a> </li>
                            @endif
                            @if($team->instagram)
                                <li> <a href="https://www.instagram.com/{{$team->instagram}}/" class="d-block" target="_blank"><i class="bx bxl-instagram"></i></a> </li>
                            @endif
                            @if($team->linkedin) 
                                <li> <a href="https://www.linkedin.com/in/{{$team->linkedin}}/" class="d-block" target="_blank"><i class="bx bxl-linkedin"></i></a> </li>
                            @endif
                        </ul>
                    </div>
                    <div class="advisor-content">
                        <h3><a href="#">{{ $team->name }}</a></h3>
                        <span>{{ $team->position }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>