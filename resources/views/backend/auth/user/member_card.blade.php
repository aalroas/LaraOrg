<link rel="stylesheet" type="text/css" href="{{asset('backend/card.css')}}">
<div id="member_card">
<div class="wrapper">
<div class="id-card">
<center style="background-color: #231f20 ; padding: 2px;"><img style="margin:1px;" width="100" height="60"
src="{{asset('uploads/settings/w_trans_en.png')}}" ></center>
<center style="background-color:#F36E26;padding: 1px;    height: 30px;">
<h5 style="display: table;margin-left: auto;margin-right: auto;padding: 7px;color: white;">Investors and
Business Development Association</h5>
</center>
<div class="avatar-wrap float-left">
<img style="max-width: 90%; margin: 0px;max-height: 150px;" class="round" src="{{ asset('storage')}}/{{ $user->profile_image }}"  />
</div>
<div class="bio-wrap">
<h5 style="display: inline;">Ad Soyad:<br>Name Surname:</h5>
<h5 style="display: table; margin-left: auto;margin-right: 35px;padding: 1px; margin-top: -22px;">{{ $user->full_name_en}}</h5>
<hr>
<h5 style="display: inline;">Uyruk:<br>Nationality:</h5>
<h5 style="display: table; margin-left: auto;margin-right: auto;padding: 1px; margin-top: -22px;">{{$user->country}}
</h5>
<hr>
<h5 style="display: inline;">Kimlik NO:<br>ID Number:</h5>
<h5 style="display: table; margin-left: auto;margin-right: auto;padding: 1px; margin-top: -22px;">
{{ $user->created_at->format('Ymd') }}{{$user->id}}</h5>
<hr>
</div>
</div>
</div>
<br>
<div class="wrapper">
<div class="id-card">
<center style="background-color: #231f20 ;padding: 2px;"><img width="100" height="60" src="{{asset('uploads/settings/w_trans_en.png')}}" alt="">
</center>
<center style="background-color:#F36E26;padding: 1px;    height: 30px;">
<h5 style="display: table;margin-left: auto;margin-right: auto;padding: 7px;color: white;">Investors and
Business Development Association</h5>
</center>
<div class="bio-wrap float-left">
<h5 style="display: inline;">Sicil No: <br> Registration NO:</h5>
<h5 style="display: table; margin-left: auto;margin-right: auto;padding: 1px; margin-top: -22px;">
{{ $user->sicil_no}}</h5>
<hr>
<h5 style="display: inline;">Şirket Adı: <br> Campany Name:</h5>
<h5 style="display: table; margin-left: auto;margin-right: auto;padding: 1px; margin-top: -22px;">{{ $user->company_name_en}}</h5>
<hr>
<h5 style="display: inline;">Adres: <br>Address:</h5>
<h5 style="display: table; margin-left: auto;margin-right: auto;padding: 1px; margin-top: -22px;">{{ $user->main_address_en}}</h5>
<hr>
<center>
<p style="margin-top: -7px;">Üyelik kartının süresi Aralık 2020'de sona eriyor <br>
The card will expires on December 30, 2020
</p>
</center>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-md-offset-4">
<center><button id="btnPrint" type="button" style="width: 150px;height: 50px;background-color: #f36e26;font-size: 25px;" class="btn btn-primary btn-block print"
data-print="member_card">{{ trans('backend.print') }}</button></center>
</div>


<script>
    document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("member_card"));

    }

    function printElement(elem) {
    var domClone = elem.cloneNode(false);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
    var $printSection = document.createElement("div");
    $printSection.id = "printSection";
    document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
    }
</script>
