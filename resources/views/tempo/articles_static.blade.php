@extends('layouts.app')

@section('stylesheets')
  <style>
    .jumbo1{
          background-image: url('{{ asset('images/thumb3.jpg') }}');
          background-size: cover;
          background-repeat: no-repeat;
    }
    .top1 {
          height:390px;
          background-color:#FFFFFF;
          margin-top:10px;
          overflow: hidden;
    }

    .top1 img {
          height:100%;
    }
  </style>
@endsection

@section('content')

    <div class="row">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">LIBRARY</h1>
      </div>
      <div class="col-lg-6">
        @guest
          <p class=text-right>
            *Please login as an authorized user to enable
            <a href="#"><button type="button" class="btn btn-disabled">New Article</button></a>
            <a href="#"><button type="button" class="btn btn-disabled">List Articles</button></a>
          </p>
        @else
          <p class=text-right>
            <a href="{{ route('articles.create') }}"><button type="button" class="btn btn-warning">New Article</button></a>
            <a href="{{ route('articles.index') }}"><button type="button" class="btn btn-secondary">List Articles</button></a>
          </p>
        @endguest
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-lg-4">
        <div class="card h-100 bg-dark">
            <a href="/library/articles/a013">
              <img class="card-img-top" src="{{ asset('images/articles/gubat7_thumbnail.jpg') }}">
            </a>
            <div class="card-body bg-dark">
                <h2>Pre-event Review ng FlipTop Gubat 7</h2>
                <p class="lead">By: Anonymous Battle Emcee</p>
                <hr class="my-4">
                <p>Sa July 14, babalik ang FlipTop sa Cebu para sa ika-pitong Gubat event.
                Gaganapin ulit ‘to sa Cap Center, at may pitong laban na posibleng
                mag-iwan ng marka sa eksena. Para mas lalo pa kayong ganahan,
                talakayin muna natin ngayon ang matinding lineup.</p>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card h-100 bg-dark">
            <a href="/library/articles/a014">
              <img class="card-img-top" src="{{ asset('images/articles/pakusganay4_thumbnail.jpg') }}">
            </a>
            <div class="card-body bg-dark">
                <h2>Pre-Event Review ng Pakusganay 4</h2>
                <p class="lead">By: Anonymous Battle Emcee</p>
                <hr class="my-4">
                <p>Aktibo ang FlipTop ngayong Hulyo! Isang linggo pagkatapos ng Gubat 7,
                pupunta naman sila sa Davao para sa Pakusganay 4. May potensyal
                maging makasaysayan ‘to dahil, gaya ng event sa Cebu, solido ang
                lahat ng mga kasaling emcee. Tignan natin ang pitong battle na
                magaganap sa Cap Auditorium…</p>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card h-100 bg-dark">
            <a href="/library/articles/a015">
              <img class="card-img-top" src="{{ asset('images/articles/a015_6.jpg') }}">
            </a>
            <div class="card-body bg-dark">
                <h2>6 na Bagay na Pwede mong Gawin Habang Nagiintay ng Bagong Video</h2>
                <p class="lead">By: Ned Castro</p>
                <hr class="my-4">
                <p>Pagkatapos ng paligsahan, hindi agad-agad napapanood online ang mga laban na
                naganap. Dahil hangarin ng FlipTop ang mabigyan kayo ng kalidad na
                video, naglalaan sila ng mahabang oras sa pag-eedit ng mga  ito.
                Malulugi rin yung mga taong lumakbay mula sa malayo o nag-ipon para
                makanood live. Baka wala nang pumunta sa susunod kung ilalabas naman
                pala agad sa YouTube yung mga duelo. Kaya habang naghihintay ka ng
                bagong upload, ito ang 6 na bagay na pwede mong gawin.</p>
            </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- /.row1 -->

    <div class="row">
      <div class="col-lg-4">
        <div class="card h-100 bg-dark">
            <a href="/library/articles/a016">
              <img class="card-img-top" src="{{ asset('images/articles/a016_Plazma.jpg') }}">
            </a>
            <div class="card-body bg-dark">
                <h2>"The Battle Rages On”: A Review of the Current 2018 Isabuhay Lineup</h2>
                <p class="lead">By: Dante Romero</p>
                <hr class="my-4">
                <p>The 2018 Isabuhay Tournament officially started at Second Sight 6, and it
                already gave us a few memorable moments. Abra and Shehyee returned to
                the battle scene, scoring impressive victories over Poison13 and
                Lhipkram respectively. 2016 finalist Plazma joined once again, and
                his unanimous decision win over Batang Rebelde is proof that he’s
                determined to bring home the crown. J-King was able to redeem himself
                from his Ahon 8 loss by defeating Sayadd in what many claim to be a
                close fight. As for Batas, he proved to everyone why he’s the
                back-to-back champion by beating Jonas in dominating fashion.</p>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card h-100 bg-dark">
            <a href="/library/articles/a009">
              <img class="card-img-top" src="{{ asset('images/articles/a009_08.jpg') }}">
            </a>
            <div class="card-body bg-dark">
                <h2>8 Maling Akala Tungkol sa FlipTop</h2>
                <p class="lead">By: Anonymous Battle Emcee</p>
                <hr class="my-4">
                <p>Walong taong gulang na ang FlipTop Battle League,
                ngunit marami pa rin ang mga may maling pananaw tungkol dito. Sa
                comment boards pa lang, makikita mo na kung sino yung hindi pa lubos
                kilala ang liga. Kaya kung isa ka sa kanila, hayaan niyo kaming
                linawin sa inyo ang ilang mga bagay-bagay. Ito ang 8 sa mga pinaka
                malaking maling akala tungkol sa FlipTop.</p>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card h-100 bg-dark">
            <a href="/library/articles/a008">
              <img class="card-img-top" src="{{ asset('images/articles/a008_01.jpg') }}">
            </a>
            <div class="card-body bg-dark">
                <h2>9 Trends in Battle Rap that Should Stop Now</h2>
                <p class="lead">By: Ned Castro</p>
                <hr class="my-4">
                <p>The phrase “too much of anything is bad”
                applies to all, even in Hiphop culture. These are the 9 current
                trends in battle rap that are starting to get annoying and should be
                eradicated once and for all. Either they’re no longer entertaining
                or are detrimental to the progress of the scene. Keep in mind that
                this list not only focuses on FlipTop, but on other leagues around
                the world as well. Let’s get started!</p>
            </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- /.row2 -->

  <div class="row">
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>FlipTop Zoning: Isang Pre-event Review</h2>
          <p class="lead">By: Anonymous Battle Emcee</p>
          <hr class="my-4">
          <p>Ilang araw na lang at Zoning na. Hihigitan o
          magiging kasing lupit kaya ito ng “Second Sight 6” na ginanap
          noong Marso? Malalaman lang natin yan sa araw mismo ng event. Sa
          ngayon, pag-usapan muna natin ang line up pati ang mga posibleng
          mangyayari sa bawat duelo. Mabigat ang mga kasali dito, kaya
          siguradong mataas ang ekspektasyon ng mga manonood.</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a012" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>Calix - Ikugan (Mini-Album Review)</h2>
          <p class="lead">By: Dante Romero</p>
          <hr class="my-4">
          <p>Calix first made his presence felt in 2016 with his
          independently-released solo album “Breakout Satirist”. His
          rage-filled delivery and relentless attacks on dirty politicians and
          the privileged elite quickly caught the attention of not only Hiphop
          heads, but enthusiasts from other genres as well. In mid 2017, he
          continued to unleash his wrath in his second project “The Lesser Of
          Your Greater Friends”. Just like his debut record, TLOYGF received
          critical acclaim and was instrumental in reintroducing the darker and
          grittier side of Pinoy Rap.</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a010" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>Freek - I'm Freek (Mixtape Review)</h2>
          <p class="lead">By: Ned Castro</p>
          <hr class="my-4">
          <p>Ang samahang Mula Etivac ay binubuo ng mga
          mahuhusay na makata mula sa iba’t ibang parte ng Cavite. Isa na
          dito ay si Freek at noong ika-16 ng Mayo 2018, nag-labas siya ng
          kanyang solo mixtape na pinamagataang “I’m Freek”. Kasing lupit
          ba ito ng mga proyektong ng kasamahan niyang sila Emar Industriya
          (“Industriyalismo”) at Ejac at Buddah Beads (“Balanse”)?
          Alamin natin dito sa track-by-track review.</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a011" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- /.row3 -->


  <div class="row">
    <div class="col-lg-8 mb-4">
      <div class="card h-100 text-center bg-dark">
        <a href="/artists"><img class="card-img-top" src="{{ asset('images/06_artistsprofiles.jpg') }}"></a>
      </div>
    </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 bg-dark">
          <div class="card-body bg-dark">
              <h2 class="display-4">Lyrics</h2>
              <p class="lead">Basahin at alamin ang mga kataga ng iyong mga paboritong battles at kanta.</p>
              <hr class="my-4">
              <p class="lead">
                 <a class="btn btn-danger btn-lg" href="/lyrics" role="button">Learn more</a>
              </p>
          </div>
        </div>
      </div>
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>Tsismoso ka, ha?</h2>
          <p class="lead">By: Ned Castro</p>
          <hr class="my-4">
          <p>Mayroong rapper na maliban sa kanyang husay tumula, ay marami na siyang naiambag sa eksena. Ang mga awitin niya ay nag-impluwensya sa mga kabataan na umiwas sa masasamang elemento at tumungo sa tamang landas. Napatawa at napa-bilib niya ang bawat manonood sa kanyang mga battle. Lahat ng ito ay binalewala nang siya ay nasangkot sa iskandalo. Sa isang iglap, mas kumalat ang kanyang pangalan, ngunit pinalitan ng poot ang mga puri. Ang mga tagahanga ay nagpalit ng anyo at sumali sa paninira sa kanya kahit hindi pa alam ang buong kuwento.</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a005" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>The Importance of Criticism</h2>
          <p class="lead">By: Dante Romero</p>
          <hr class="my-4">
          <p>There are plenty of digital and printed magazines in the Philippines dedicated solely to music. So far, they are doing a good job in promoting different artists and events as well as keeping the fans up to date with the latest releases. The “reviews” part is where their flaws come in. Have you ever wondered why these publications often just praise an album, despite its obvious imperfections? Yes, some of them point out the mistakes, but they don’t go into detail. The answer is simple: majority of local musicians are sensitive, very sensitive. </p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a006" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>8 Local Albums Para Sa Mga Battle Rap Fans</h2>
          <p class="lead">By: Ned Castro</p>
          <hr class="my-4">
          <p>Nabitin ka ba sa mga umaatikabong punchlines sa FlipTop?  Inihahandog ng piyesang ito ang 8 lokal na album na garantisadong magugustuhan ng mga tagasubaybay ng battle rap. Makakatulong din ang listahan na ito sa mga makatang magsisimula pa lang makipagbakbakan sa entablado. Bagamat halos lahat ng nandito ay hindi pa nakakalaban sa FlipTop, walang makakatanggi na ang kanilang mga obra ay nagsilbing inspirayon sa karamihan ng emcees sa liga. Umpisahan na natin ang soundtrip…</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a007" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- /.row -->


  <div class="row">
    <div class="col-lg-12">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>“Unang Banat Kay…”: 12 Tips Para Sa Mga Baguhang Battle Emcee</h2>
          <p class="lead">By: Anonymous Battle Emcee</p>
          <hr class="my-4">
          <p>Dahil papalapit na nang papalapit ang Process of Illumination 6, ito ang tamang panahon upang magbigay ng gabay sa mga panibagong makatang mandirigma. Hindi ka man sasali sa tryout ngayong taon, ang piyesang ito ay maari pa ring makatulong sa iyong pag-angat. Tandaan na malayo sa madali ang pagiging isang battle emcee, kaya kung ika’y determinado talaga, dapat mong isaulo ang mga nakalista dito. Maliban sa pagbuo ng mga berso, tatalakayin din ng listahang ito ang buhay sa likod ng entablado. Klaro ba? Magsimula na tayo…</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a002" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>Mga Gintong Nakabaon: 10 Sa Pinaka Underrated Na Battles Sa FlipTop</h2>
          <p class="lead">By: Ned Castro</p>
          <hr class="my-4">
          <p>Mula pa nung 2010, napaka dami nang mga classic na laban na ibinigay ang FlipTop. Nandiyan ang Loonie vs. Zaito, Dello vs. Target, Sak Maestro vs. Zero Hour, Mhot vs. Sur Henyo, Shernan / M Zhayt vs. Sinio / Tipsy D, at iba pa. Ang mga duelong ito ang nag-iwan ng marka sa mga tao at patuloy pa ring pinapanood hanggang ngayon. Sa kabila ng mga sikat na battle, mayroon ding iilan na kahit gaano katindi ay hindi masyadong napapansin. Tututukan ng artikulong ito ang sampu sa pinaka underrated na sagupaan sa liga. Ito ang mga engkwentrong karapat-dapat ding magkaroon ng higit isang milyong views dahil sa husay na ipinakita ng mga makata. FlipTop game? Game!</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a001" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4" id="BornToKillTheDevil">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>The Throwback: Ghetto Doggs – Born to Kill the Devil (Album Review)</h2>
          <p class="lead">By: Dante Romero</p>
          <hr class="my-4">
          <p>It was the mid 90’s. Pinoy Hiphop heads were still accustomed to comedic raps and socially-conscious tracks with an uplifting tone. The beats usually made the listeners get up from their chairs and bust their moves. Everything changed when the Ghetto Doggs was formed in 1995. It comprises of groups and solo acts from the first batch of Dongalo Wreckords, a label founded by the one and only Andrew E. Angered by the never-ending rise of criminality in the country, the supergroup decided to retaliate with an album that paved the way for Philippine Hardcore Rap. Let us take a trip down memory lane with this track-by-track review of Born to Kill the Devil, which was released in 1996.</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a004" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100 bg-dark">
        <div class="card-body bg-dark">
          <h2>Writers’ Block: Mind the Now (Album Review)</h2>
          <p class="lead">By: Ned Castro</p>
          <hr class="my-4">
          <p>Writers’ Block was established in January of 2015 by veteran and up-and-coming emcees. Its purpose is to provide practitioners of the culture an online haven to share their compositions, collaborate, or just discuss anything and everything about Hiphop. One year later, the group released the critically-acclaimed compilation album entitled “Clarion Call”, which features mostly Manila-based rappers and producers. Not to be outshined by their comrades, WB’s Mindanao chapter decided to follow it up with “Mind the Now” in March of 2018. The title was inspired by the phrase popularized by FlipTop battle emcee Sak Maestro, and while he’s absent in this project, the lineup is still a promising one. So, did this album elevate Mindanao’s Hiphop scene even higher? This track-by-track review will hopefully answer that question. Keep in mind that this piece is solely the writer’s opinion, and does not reflect the view of the rest of the FlipTop staff. Without further ado, let’s begin…</p>
          <p class="lead">
             <a class="btn btn-warning btn-lg" href="/library/articles/a003" role="button">Read</a>
          </p>
        </div>
      </div>
    </div>
  </div>

@endsection
