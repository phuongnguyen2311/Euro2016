@extends('layouts.master')
@section('content')
	<div id="container">
		<main>
			<div class="box" style="position:relative">
			   <div id="pots">
			      <div class="potW">
			         <h3>Pot 1</h3>
			         <ul id="pot-1">
			            <li class="ES" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-ES"></div>
			               <span class="nm">Spain</span>
			            </li>
			            <li class="DE" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-DE"></div>
			               <span class="nm">Germany</span>
			            </li>
			            <li class="_england" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-_england"></div>
			               <span class="nm">England</span>
			            </li>
			            <li class="PT" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-PT"></div>
			               <span class="nm">Portugal</span>
			            </li>
			            <li class="BE" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-BE"></div>
			               <span class="nm">Belgium</span>
			            </li>
			         </ul>
			      </div>
			      <div class="potW">
			         <h3>Pot 2</h3>
			         <ul id="pot-2">
			            <li class="IT" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-IT"></div>
			               <span class="nm">Italy</span>
			            </li>
			            <li class="RU" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-RU"></div>
			               <span class="nm">Russia</span>
			            </li>
			            <li class="CH" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-CH"></div>
			               <span class="nm">Switzerland</span>
			            </li>
			            <li class="AT" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-AT"></div>
			               <span class="nm">Austria</span>
			            </li>
			            <li class="HR" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-HR"></div>
			               <span class="nm">Croatia</span>
			            </li>
			            <li class="UA" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-UA"></div>
			               <span class="nm">Ukraine</span>
			            </li>
			         </ul>
			      </div>
			      <div class="potW">
			         <h3>Pot 3</h3>
			         <ul id="pot-3">
			            <li class="CZ" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-CZ"></div>
			               <span class="nm">Czech Rep.</span>
			            </li>
			            <li class="SE" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-SE"></div>
			               <span class="nm">Sweden</span>
			            </li>
			            <li class="PL" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-PL"></div>
			               <span class="nm">Poland</span>
			            </li>
			            <li class="RO" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-RO"></div>
			               <span class="nm">Romania</span>
			            </li>
			            <li class="SK" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-SK"></div>
			               <span class="nm">Slovakia</span>
			            </li>
			            <li class="HU" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-HU"></div>
			               <span class="nm">Hungary</span>
			            </li>
			         </ul>
			      </div>
			      <div class="potW">
			         <h3>Pot 4</h3>
			         <ul id="pot-4">
			            <li class="TR" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-TR"></div>
			               <span class="nm">Turkey</span>
			            </li>
			            <li class="IE" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-IE"></div>
			               <span class="nm">Rep. Ireland</span>
			            </li>
			            <li class="IS" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-IS"></div>
			               <span class="nm">Iceland</span>
			            </li>
			            <li class="_wales" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-_wales"></div>
			               <span class="nm">Wales</span>
			            </li>
			            <li class="AL" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-AL"></div>
			               <span class="nm">Albania</span>
			            </li>
			            <li class="_northern-ireland" style="opacity: 0.4;">
			               <div class="flag-24 flag-24-_northern-ireland"></div>
			               <span class="nm">Northern Ireland</span>
			            </li>
			         </ul>
			      </div>
			   </div>
			   <div style="clear:both;"><a id="drawexec" class="btn btn-lg btn-em" href="javascript:void(0);" onclick="draw()" style="visibility: visible;">Simulate draw</a></div>
			   <div id="groups">
			      <div class="groupW">
			         <h3>Group A</h3>
			         <ul id="group-A">
			            <li>
			               <div class="flag-24 flag-24-FR"></div>
			               <span class="nm">France</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-UA"></div>
			               <span class="nm">Ukraine</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-PL"></div>
			               <span class="nm">Poland</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-AL"></div>
			               <span class="nm">Albania</span>
			            </li>
			         </ul>
			      </div>
			      <div class="groupW">
			         <h3>Group B</h3>
			         <ul id="group-B">
			            <li>
			               <div class="flag-24 flag-24-PT"></div>
			               <span class="nm">Portugal</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-RU"></div>
			               <span class="nm">Russia</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-RO"></div>
			               <span class="nm">Romania</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-IS"></div>
			               <span class="nm">Iceland</span>
			            </li>
			         </ul>
			      </div>
			      <div class="groupW">
			         <h3>Group C</h3>
			         <ul id="group-C">
			            <li>
			               <div class="flag-24 flag-24-ES"></div>
			               <span class="nm">Spain</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-IT"></div>
			               <span class="nm">Italy</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-CZ"></div>
			               <span class="nm">Czech Rep.</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-IE"></div>
			               <span class="nm">Rep. Ireland</span>
			            </li>
			         </ul>
			      </div>
			      <div class="groupW">
			         <h3>Group D</h3>
			         <ul id="group-D">
			            <li>
			               <div class="flag-24 flag-24-BE"></div>
			               <span class="nm">Belgium</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-HR"></div>
			               <span class="nm">Croatia</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-HU"></div>
			               <span class="nm">Hungary</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-_wales"></div>
			               <span class="nm">Wales</span>
			            </li>
			         </ul>
			      </div>
			      <div class="groupW">
			         <h3>Group E</h3>
			         <ul id="group-E">
			            <li>
			               <div class="flag-24 flag-24-DE"></div>
			               <span class="nm">Germany</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-CH"></div>
			               <span class="nm">Switzerland</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-SK"></div>
			               <span class="nm">Slovakia</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-_northern-ireland"></div>
			               <span class="nm">Northern Ireland</span>
			            </li>
			         </ul>
			      </div>
			      <div class="groupW">
			         <h3>Group F</h3>
			         <ul id="group-F">
			            <li>
			               <div class="flag-24 flag-24-_england"></div>
			               <span class="nm">England</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-AT"></div>
			               <span class="nm">Austria</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-SE"></div>
			               <span class="nm">Sweden</span>
			            </li>
			            <li>
			               <div class="flag-24 flag-24-TR"></div>
			               <span class="nm">Turkey</span>
			            </li>
			         </ul>
			      </div>
			      <li class="UA anime" style="opacity: 1; top: 310.969px; left: 14.9688px; display: none;">
			         <div class="flag-24 flag-24-UA"></div>
			         <span class="nm">Ukraine</span>
			      </li>
			      <li class="PL anime" style="opacity: 1; top: 334.969px; left: 14.9688px; display: none;">
			         <div class="flag-24 flag-24-PL"></div>
			         <span class="nm">Poland</span>
			      </li>
			      <li class="AL anime" style="opacity: 1; top: 358.969px; left: 14.9688px; display: none;">
			         <div class="flag-24 flag-24-AL"></div>
			         <span class="nm">Albania</span>
			      </li>
			      <li class="PT anime" style="opacity: 1; top: 286.969px; left: 134.75px; display: none;">
			         <div class="flag-24 flag-24-PT"></div>
			         <span class="nm">Portugal</span>
			      </li>
			      <li class="RU anime" style="opacity: 1; top: 310.969px; left: 134.75px; display: none;">
			         <div class="flag-24 flag-24-RU"></div>
			         <span class="nm">Russia</span>
			      </li>
			      <li class="RO anime" style="opacity: 1; top: 334.969px; left: 134.75px; display: none;">
			         <div class="flag-24 flag-24-RO"></div>
			         <span class="nm">Romania</span>
			      </li>
			      <li class="IS anime" style="opacity: 1; top: 358.969px; left: 134.75px; display: none;">
			         <div class="flag-24 flag-24-IS"></div>
			         <span class="nm">Iceland</span>
			      </li>
			      <li class="ES anime" style="opacity: 1; top: 286.969px; left: 254.531px; display: none;">
			         <div class="flag-24 flag-24-ES"></div>
			         <span class="nm">Spain</span>
			      </li>
			      <li class="IT anime" style="opacity: 1; top: 310.969px; left: 254.531px; display: none;">
			         <div class="flag-24 flag-24-IT"></div>
			         <span class="nm">Italy</span>
			      </li>
			      <li class="CZ anime" style="opacity: 1; top: 334.969px; left: 254.531px; display: none;">
			         <div class="flag-24 flag-24-CZ"></div>
			         <span class="nm">Czech Rep.</span>
			      </li>
			      <li class="IE anime" style="opacity: 1; top: 358.969px; left: 254.531px; display: none;">
			         <div class="flag-24 flag-24-IE"></div>
			         <span class="nm">Rep. Ireland</span>
			      </li>
			      <li class="BE anime" style="opacity: 1; top: 286.969px; left: 374.312px; display: none;">
			         <div class="flag-24 flag-24-BE"></div>
			         <span class="nm">Belgium</span>
			      </li>
			      <li class="HR anime" style="opacity: 1; top: 310.969px; left: 374.312px; display: none;">
			         <div class="flag-24 flag-24-HR"></div>
			         <span class="nm">Croatia</span>
			      </li>
			      <li class="HU anime" style="opacity: 1; top: 334.969px; left: 374.312px; display: none;">
			         <div class="flag-24 flag-24-HU"></div>
			         <span class="nm">Hungary</span>
			      </li>
			      <li class="_wales anime" style="opacity: 1; top: 358.969px; left: 374.312px; display: none;">
			         <div class="flag-24 flag-24-_wales"></div>
			         <span class="nm">Wales</span>
			      </li>
			      <li class="DE anime" style="opacity: 1; top: 286.969px; left: 494.094px; display: none;">
			         <div class="flag-24 flag-24-DE"></div>
			         <span class="nm">Germany</span>
			      </li>
			      <li class="CH anime" style="opacity: 1; top: 310.969px; left: 494.094px; display: none;">
			         <div class="flag-24 flag-24-CH"></div>
			         <span class="nm">Switzerland</span>
			      </li>
			      <li class="SK anime" style="opacity: 1; top: 334.969px; left: 494.094px; display: none;">
			         <div class="flag-24 flag-24-SK"></div>
			         <span class="nm">Slovakia</span>
			      </li>
			      <li class="_northern-ireland anime" style="opacity: 1; top: 358.969px; left: 494.094px; display: none;">
			         <div class="flag-24 flag-24-_northern-ireland"></div>
			         <span class="nm">Northern Ireland</span>
			      </li>
			      <li class="_england anime" style="opacity: 1; top: 286.969px; left: 613.875px; display: none;">
			         <div class="flag-24 flag-24-_england"></div>
			         <span class="nm">England</span>
			      </li>
			      <li class="AT anime" style="opacity: 1; top: 310.969px; left: 613.875px; display: none;">
			         <div class="flag-24 flag-24-AT"></div>
			         <span class="nm">Austria</span>
			      </li>
			      <li class="SE anime" style="opacity: 1; top: 334.969px; left: 613.875px; display: none;">
			         <div class="flag-24 flag-24-SE"></div>
			         <span class="nm">Sweden</span>
			      </li>
			      <li class="TR anime" style="opacity: 1; top: 358.969px; left: 613.875px; display: none;">
			         <div class="flag-24 flag-24-TR"></div>
			         <span class="nm">Turkey</span>
			      </li>
			   </div>
			   <div style="clear:both;"><a id="drawsave" class="btn btn-lg btn-em"  onclick="showPopup()">Save Prediction</a></div>
			</div>
			<!-- Popup enter name -->
			<div id="logindiv" >	
			    @include('common.errors')		
	            <form class="form" action="/userdraw" method="POST"  id="userdraw">
	              {{ csrf_field() }}
	                <hr><br>
	                <label>Name <span class= "require">(*)</span>: </label>
	                <br>
	                <input type="text" id="username" name="name" placeholder="Ex -john123">
	                <br>
	                <span class= "errors errors-username"></span>
	                <br>
	                <label>Email <span class= "require">(*)</span>: </label>
	                <br>
	                <input type="text" id="email" name="email" placeholder="exempale@gmail.com"><br>
	                <span class= "errors errors-email"></span>
	                <input type="hidden" id="group_name" name="group_name" value="Group A">
	                <br>
	                <div class="social">
	         	        @include('partials.share-buttons') 	
	                </div>     
	                 <br>
	                <input type="button" id="enter" value="Enter">
	            </form>
	        </div>
		</main>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery_popup.js"></script>
	<script>
		var C = {
		    XX: {
		        c: [0, 0],
		        n: "TBD",
		        n2: "TBD"
		    },
		    JP: {
		        c: [6, 6],
		        n: "Japan",
		        n2: "Japan"
		    },
		    AU: {
		        c: [6, 6],
		        n: "Australia",
		        n2: "Australia"
		    },
		    KR: {
		        c: [6, 6],
		        n: "Korea Republic",
		        n2: "Korea Rep."
		    },
		    UZ: {
		        c: [6, 6],
		        n: "Uzbekistan",
		        n2: "Uzbekistan"
		    },
		    IR: {
		        c: [6, 6],
		        n: "Iran",
		        n2: "Iran"
		    },
		    IQ: {
		        c: [6, 6],
		        n: "Iraq",
		        n2: "Iraq"
		    },
		    JO: {
		        c: [5, 5],
		        n: "Jordan",
		        n2: "Jordan"
		    },
		    QA: {
		        c: [5, 5],
		        n: "Qatar",
		        n2: "Qatar"
		    },
		    CN: {
		        c: [5, 5],
		        n: "China PR",
		        n2: "China PR"
		    },
		    BH: {
		        c: [5, 5],
		        n: "Bahrain",
		        n2: "Bahrain"
		    },
		    KP: {
		        c: [5, 5],
		        n: "DPR Korea",
		        n2: "DPR Korea"
		    },
		    AE: {
		        c: [5, 5],
		        n: "United Arab Emirates",
		        n2: "UAE"
		    },
		    KW: {
		        c: [4, 4],
		        n: "Kuwait",
		        n2: "Kuwait"
		    },
		    SA: {
		        c: [4, 4],
		        n: "Saudi Arabia",
		        n2: "Saudi Arabia"
		    },
		    OM: {
		        c: [4, 4],
		        n: "Oman",
		        n2: "Oman"
		    },
		    TH: {
		        c: [4, 4],
		        n: "Thailand",
		        n2: "Thailand"
		    },
		    LB: {
		        c: [3, 3],
		        n: "Lebanon",
		        n2: "Lebanon"
		    },
		    TM: {
		        c: [3, 3],
		        n: "Turkmenistan",
		        n2: "Turkmenistan"
		    },
		    VN: {
		        c: [3, 3],
		        n: "Vietnam",
		        n2: "Vietnam"
		    },
		    MY: {
		        c: [3, 3],
		        n: "Malaysia",
		        n2: "Malaysia"
		    },
		    ID: {
		        c: [3, 3],
		        n: "Indonesia",
		        n2: "Indonesia"
		    },
		    IN: {
		        c: [3, 3],
		        n: "India",
		        n2: "India"
		    },
		    SY: {
		        c: [3, 3],
		        n: "Syria",
		        n2: "Syria"
		    },
		    SG: {
		        c: [3, 3],
		        n: "Singapore",
		        n2: "Singapore"
		    },
		    TJ: {
		        c: [3, 3],
		        n: "Tajikistan",
		        n2: "Tajikistan"
		    },
		    PS: {
		        c: [3, 3],
		        n: "Palestine",
		        n2: "Palestine"
		    },
		    PH: {
		        c: [3, 3],
		        n: "Philippines",
		        n2: "Philippines"
		    },
		    AF: {
		        c: [3, 3],
		        n: "Afghanistan",
		        n2: "Afghanistan"
		    },
		    MV: {
		        c: [3, 3],
		        n: "Maldives",
		        n2: "Maldives"
		    },
		    KG: {
		        c: [3, 3],
		        n: "Kyrgyzstan",
		        n2: "Kyrgyzstan"
		    },
		    MM: {
		        c: [3, 3],
		        n: "Myanmar",
		        n2: "Myanmar"
		    },
		    HK: {
		        c: [3, 3],
		        n: "Hong Kong",
		        n2: "Hong Kong"
		    },
		    PK: {
		        c: [3, 3],
		        n: "Pakistan",
		        n2: "Pakistan"
		    },
		    NP: {
		        c: [3, 3],
		        n: "Nepal",
		        n2: "Nepal"
		    },
		    BD: {
		        c: [3, 3],
		        n: "Bangladesh",
		        n2: "Bangladesh"
		    },
		    LA: {
		        c: [3, 3],
		        n: "Laos",
		        n2: "Laos"
		    },
		    "_chinese-taipei": {
		        c: [3, 3],
		        n: "Chinese Taipei",
		        n2: "Chinese Taipei"
		    },
		    GU: {
		        c: [3, 3],
		        n: "Guam",
		        n2: "Guam"
		    },
		    LK: {
		        c: [3, 3],
		        n: "Sri Lanka",
		        n2: "Sri Lanka"
		    },
		    YE: {
		        c: [3, 3],
		        n: "Yemen",
		        n2: "Yemen"
		    },
		    TL: {
		        c: [3, 3],
		        n: "Timor-Leste",
		        n2: "Timor-Leste"
		    },
		    KH: {
		        c: [3, 3],
		        n: "Cambodia",
		        n2: "Cambodia"
		    },
		    BT: {
		        c: [3, 3],
		        n: "Bhutan",
		        n2: "Bhutan"
		    },
		    NZ: {
		        c: [5, 5],
		        n: "New Zealand",
		        n2: "New Zealand"
		    },
		    PF: {
		        c: [3, 3],
		        n: "Tahiti",
		        n2: "Tahiti"
		    },
		    AR: {
		        c: [9, 9],
		        n: "Argentina",
		        n2: "Argentina"
		    },
		    CO: {
		        c: [8, 8],
		        n: "Colombia",
		        n2: "Colombia"
		    },
		    BR: {
		        c: [8, 8],
		        n: "Brazil",
		        n2: "Brazil"
		    },
		    CL: {
		        c: [8, 8],
		        n: "Chile",
		        n2: "Chile"
		    },
		    UY: {
		        c: [7, 7],
		        n: "Uruguay",
		        n2: "Uruguay"
		    },
		    EC: {
		        c: [7, 7],
		        n: "Ecuador",
		        n2: "Ecuador"
		    },
		    VE: {
		        c: [7, 7],
		        n: "Venezuela",
		        n2: "Venezuela"
		    },
		    PE: {
		        c: [6, 6],
		        n: "Peru",
		        n2: "Peru"
		    },
		    PY: {
		        c: [6, 6],
		        n: "Paraguay",
		        n2: "Paraguay"
		    },
		    BO: {
		        c: [6, 6],
		        n: "Bolivia",
		        n2: "Bolivia"
		    },
		    MX: {
		        c: [7, 7],
		        n: "Mexico",
		        n2: "Mexico"
		    },
		    US: {
		        c: [7, 7],
		        n: "USA",
		        n2: "USA"
		    },
		    HN: {
		        c: [6, 6],
		        n: "Honduras",
		        n2: "Honduras"
		    },
		    CR: {
		        c: [6, 6],
		        n: "Costa Rica",
		        n2: "Costa Rica"
		    },
		    JM: {
		        c: [5, 5],
		        n: "Jamaica",
		        n2: "Jamaica"
		    },
		    TT: {
		        c: [5, 5],
		        n: "Trinidad and Tobago",
		        n2: "Trinidad and Tobago"
		    },
		    PA: {
		        c: [4, 4],
		        n: "Panama",
		        n2: "Panama"
		    },
		    SV: {
		        c: [4, 4],
		        n: "El Salvador",
		        n2: "El Salvador"
		    },
		    CA: {
		        c: [4, 4],
		        n: "Canada",
		        n2: "Canada"
		    },
		    HT: {
		        c: [4, 4],
		        n: "Haiti",
		        n2: "Haiti"
		    },
		    GT: {
		        c: [4, 4],
		        n: "Guatemala",
		        n2: "Guatemala"
		    },
		    VC: {
		        c: [4, 4],
		        n: "St. Vincent / Grenadines",
		        n2: "St.Vincent/Grenadines"
		    },
		    CI: {
		        c: [7, 7],
		        n: "C\u00f4te d'Ivoire",
		        n2: "C\u00f4te d'Ivoire"
		    },
		    GH: {
		        c: [7, 7],
		        n: "Ghana",
		        n2: "Ghana"
		    },
		    NG: {
		        c: [6, 6],
		        n: "Nigeria",
		        n2: "Nigeria"
		    },
		    DZ: {
		        c: [6, 6],
		        n: "Algeria",
		        n2: "Algeria"
		    },
		    ZA: {
		        c: [5, 5],
		        n: "South Africa",
		        n2: "South Africa"
		    },
		    CM: {
		        c: [5, 5],
		        n: "Cameroon",
		        n2: "Cameroon"
		    },
		    BF: {
		        c: [5, 5],
		        n: "Burkina Faso",
		        n2: "Burkina Faso"
		    },
		    AO: {
		        c: [5, 5],
		        n: "Angola",
		        n2: "Angola"
		    },
		    TG: {
		        c: [5, 5],
		        n: "Togo",
		        n2: "Togo"
		    },
		    TN: {
		        c: [5, 5],
		        n: "Tunisia",
		        n2: "Tunisia"
		    },
		    SN: {
		        c: [5, 5],
		        n: "Senegal",
		        n2: "Senegal"
		    },
		    MA: {
		        c: [5, 5],
		        n: "Morocco",
		        n2: "Morocco"
		    },
		    GQ: {
		        c: [5, 5],
		        n: "Equatorial Guinea",
		        n2: "Equatorial Guinea"
		    },
		    EG: {
		        c: [5, 5],
		        n: "Egypt",
		        n2: "Egypt"
		    },
		    ZR: {
		        c: [5, 5],
		        n: "Zaire",
		        n2: "Zaire"
		    },
		    ET: {
		        c: [5, 5],
		        n: "Ethiopia",
		        n2: "Ethiopia"
		    },
		    BW: {
		        c: [5, 5],
		        n: "Botswana",
		        n2: "Botswana"
		    },
		    CF: {
		        c: [5, 5],
		        n: "Central African Republic",
		        n2: "Central African Rep."
		    },
		    SL: {
		        c: [5, 5],
		        n: "Sierra Leone",
		        n2: "Sierra Leone"
		    },
		    CV: {
		        c: [5, 5],
		        n: "Cape Verde",
		        n2: "Cape Verde"
		    },
		    TZ: {
		        c: [5, 5],
		        n: "Tanzania",
		        n2: "Tanzania"
		    },
		    GM: {
		        c: [5, 5],
		        n: "Gambia",
		        n2: "Gambia"
		    },
		    ZM: {
		        c: [5, 5],
		        n: "Zambia",
		        n2: "Zambia"
		    },
		    LS: {
		        c: [5, 5],
		        n: "Lesotho",
		        n2: "Lesotho"
		    },
		    SD: {
		        c: [5, 5],
		        n: "Sudan",
		        n2: "Sudan"
		    },
		    CG: {
		        c: [5, 5],
		        n: "Congo",
		        n2: "Congo"
		    },
		    GA: {
		        c: [5, 5],
		        n: "Gabon",
		        n2: "Gabon"
		    },
		    NE: {
		        c: [5, 5],
		        n: "Niger",
		        n2: "Niger"
		    },
		    MW: {
		        c: [5, 5],
		        n: "Malawi",
		        n2: "Malawi"
		    },
		    KE: {
		        c: [5, 5],
		        n: "Kenya",
		        n2: "Kenya"
		    },
		    NA: {
		        c: [5, 5],
		        n: "Namibia",
		        n2: "Namibia"
		    },
		    GN: {
		        c: [5, 5],
		        n: "Guinea",
		        n2: "Guinea"
		    },
		    MZ: {
		        c: [5, 5],
		        n: "Mozambique",
		        n2: "Mozambique"
		    },
		    ZW: {
		        c: [5, 5],
		        n: "Zimbabwe",
		        n2: "Zimbabwe"
		    },
		    ML: {
		        c: [5, 5],
		        n: "Mali",
		        n2: "Mali"
		    },
		    BJ: {
		        c: [5, 5],
		        n: "Benin",
		        n2: "Benin"
		    },
		    RW: {
		        c: [5, 5],
		        n: "Rwanda",
		        n2: "Rwanda"
		    },
		    LY: {
		        c: [5, 5],
		        n: "Libya",
		        n2: "Libya"
		    },
		    CD: {
		        c: [5, 5],
		        n: "DR Congo",
		        n2: "DR Congo"
		    },
		    UG: {
		        c: [5, 5],
		        n: "Uganda",
		        n2: "Uganda"
		    },
		    LR: {
		        c: [5, 5],
		        n: "Liberia",
		        n2: "Liberia"
		    },
		    DD: {
		        c: [8, 8],
		        n: "East Germany",
		        n2: "East Germany"
		    },
		    YU: {
		        c: [7, 7],
		        n: "Yugoslavia",
		        n2: "Yugoslavia"
		    },
		    SU: {
		        c: [7, 7],
		        n: "Soviet Union",
		        n2: "Soviet Union"
		    },
		    DE: {
		        c: [9, 9],
		        n: "Germany",
		        n2: "Germany"
		    },
		    BE: {
		        c: [8, 8],
		        n: "Belgium",
		        n2: "Belgium"
		    },
		    NL: {
		        c: [8, 8],
		        n: "Netherlands",
		        n2: "Netherlands"
		    },
		    PT: {
		        c: [8, 8],
		        n: "Portugal",
		        n2: "Portugal"
		    },
		    RO: {
		        c: [8, 8],
		        n: "Romania",
		        n2: "Romania"
		    },
		    _england: {
		        c: [8, 8],
		        n: "England",
		        n2: "England"
		    },
		    _wales: {
		        c: [7, 7],
		        n: "Wales",
		        n2: "Wales"
		    },
		    ES: {
		        c: [7, 7],
		        n: "Spain",
		        n2: "Spain"
		    },
		    HR: {
		        c: [7, 7],
		        n: "Croatia",
		        n2: "Croatia"
		    },
		    SK: {
		        c: [7, 7],
		        n: "Slovakia",
		        n2: "Slovakia"
		    },
		    AT: {
		        c: [7, 7],
		        n: "Austria",
		        n2: "Austria"
		    },
		    IT: {
		        c: [7, 7],
		        n: "Italy",
		        n2: "Italy"
		    },
		    CH: {
		        c: [7, 7],
		        n: "Switzerland",
		        n2: "Switzerland"
		    },
		    CZ: {
		        c: [7, 7],
		        n: "Czech Republic",
		        n2: "Czech Rep."
		    },
		    FR: {
		        c: [7,
		            7
		        ],
		        n: "France",
		        n2: "France"
		    },
		    IS: {
		        c: [7, 7],
		        n: "Iceland",
		        n2: "Iceland"
		    },
		    DK: {
		        c: [7, 7],
		        n: "Denmark",
		        n2: "Denmark"
		    },
		    BA: {
		        c: [7, 7],
		        n: "Bosnia-Herzegovina",
		        n2: "Bosnia-Herzeg."
		    },
		    UA: {
		        c: [7, 7],
		        n: "Ukraine",
		        n2: "Ukraine"
		    },
		    RU: {
		        c: [7, 7],
		        n: "Russia",
		        n2: "Russia"
		    },
		    _scotland: {
		        c: [7, 7],
		        n: "Scotland",
		        n2: "Scotland"
		    },
		    PL: {
		        c: [6, 6],
		        n: "Poland",
		        n2: "Poland"
		    },
		    HU: {
		        c: [6, 6],
		        n: "Hungary",
		        n2: "Hungary"
		    },
		    SE: {
		        c: [6, 6],
		        n: "Sweden",
		        n2: "Sweden"
		    },
		    AL: {
		        c: [6, 6],
		        n: "Albania",
		        n2: "Albania"
		    },
		    "_northern-ireland": {
		        c: [6, 6],
		        n: "Northern Ireland",
		        n2: "Northern Ireland"
		    },
		    RS: {
		        c: [6, 6],
		        n: "Serbia",
		        n2: "Serbia"
		    },
		    GR: {
		        c: [6, 6],
		        n: "Greece",
		        n2: "Greece"
		    },
		    TR: {
		        c: [6, 6],
		        n: "Turkey",
		        n2: "Turkey"
		    },
		    SI: {
		        c: [6, 6],
		        n: "Slovenia",
		        n2: "Slovenia"
		    },
		    IL: {
		        c: [6, 6],
		        n: "Israel",
		        n2: "Israel"
		    },
		    IE: {
		        c: [6, 6],
		        n: "Republic of Ireland",
		        n2: "Rep. Ireland"
		    },
		    NO: {
		        c: [6, 6],
		        n: "Norway",
		        n2: "Norway"
		    },
		    BG: {
		        c: [5, 5],
		        n: "Bulgaria",
		        n2: "Bulgaria"
		    },
		    ME: {
		        c: [5, 5],
		        n: "Montenegro",
		        n2: "Montenegro"
		    },
		    AM: {
		        c: [5, 5],
		        n: "Armenia",
		        n2: "Armenia"
		    },
		    FI: {
		        c: [5, 5],
		        n: "Finland",
		        n2: "Finland"
		    },
		    LV: {
		        c: [5, 5],
		        n: "Latvia",
		        n2: "Latvia"
		    },
		    EE: {
		        c: [5, 5],
		        n: "Estonia",
		        n2: "Estonia"
		    },
		    BY: {
		        c: [5, 5],
		        n: "Belarus",
		        n2: "Belarus"
		    },
		    LT: {
		        c: [4, 4],
		        n: "Lithuania",
		        n2: "Lithuania"
		    },
		    MD: {
		        c: [4, 4],
		        n: "Moldova",
		        n2: "Moldova"
		    },
		    MK: {
		        c: [4, 4],
		        n: "FYR Macedonia",
		        n2: "FYR Macedonia"
		    },
		    AZ: {
		        c: [4, 4],
		        n: "Azerbaijan",
		        n2: "Azerbaijan"
		    },
		    GE: {
		        c: [4, 4],
		        n: "Georgia",
		        n2: "Georgia"
		    },
		    CY: {
		        c: [4, 4],
		        n: "Cyprus",
		        n2: "Cyprus"
		    },
		    LU: {
		        c: [3, 3],
		        n: "Luxembourg",
		        n2: "Luxembourg"
		    },
		    KZ: {
		        c: [3, 3],
		        n: "Kazakhstan",
		        n2: "Kazakhstan"
		    },
		    LI: {
		        c: [3, 3],
		        n: "Liechtenstein",
		        n2: "Liechtenstein"
		    },
		    FO: {
		        c: [3, 3],
		        n: "Faroe Islands",
		        n2: "Faroe Islands"
		    },
		    MT: {
		        c: [3, 3],
		        n: "Malta",
		        n2: "Malta"
		    },
		    AD: {
		        c: [3, 3],
		        n: "Andorra",
		        n2: "Andorra"
		    },
		    SM: {
		        c: [3, 3],
		        n: "San Marino",
		        n2: "San Marino"
		    },
		    GI: {
		        c: [3, 3],
		        n: "Gibraltar",
		        n2: "Gibraltar"
		    }
		};
	</script>
	<script>
		function init() {
			$("#drawsave").css("display", "none");
			$("#logindiv").css("visibility", "hidden");
			
		    var c = [];
		    $.each(pot, function(b, d) {
		        var a = [];
		        a.push("<div class='potW'>");
		        a.push("<h3>Pot " + (b + 1) + "</h3>");
		        a.push("<ul id='pot-" + (b + 1) + "'>");
		        $.each(d, function(c, b) {
		            a.push("<li class='" + b + "'><div class='flag-24 flag-24-" + b + "'></div><span class='nm'>" + C[b].n2 + "</span>")
		        });
		        a.push("</ul>");
		        a.push("</div>");
		        c.push(a.join(""))
		    });
		    $("#pots").html(c.join(""));
		    var e = [];
		    $.each(group, function(c, d) {
		        var a = [];
		        a.push("<div class='groupW'>");
		        a.push("<h3>Group " + d.n + "</h3>");
		        a.push("<ul id='group-" + d.n +
		            "'>");
		        $.each(d.m, function(c, b) {
		            var d = "";
		            "XX" != b && (d = "<span class='nm'>" + C[b].n2 + "</span>");
		            a.push("<li><div class='flag-24 flag-24-" + b + "'></div>" + d)
		        });
		        a.push("</ul>");
		        a.push("</div>");
		        e.push(a.join(""))
		    });
		    $("#groups").html(e.join(""))
		}

		function drawAnimation() {
		    $("#drawexec").css("visibility", "hidden");
		    setTimeout(function() {
		        $("#drawexec").css("visibility", "visible").html("Simulate draw again");
		        $("#drawsave").css("display", "block");
		        
		    }, 1700 * RAWG.length);
		    $.each(RAWG, function(c, e) {
		        $.each(e, function(b, d) {
		            if (-1 != $.inArray(d, reserved)) return !0;
		            if ("XX" == d) {
		                var a = $("#pots .XX").css("opacity", ".4");
		                setTimeout(function() {
		                    setTimeout(function() {
		                        $("#groups ul:eq(" + c + ") li:eq(" + b + ")").html(a.html())
		                    }, 1E3)
		                }, 200 * c + b * (200 * RAWG.length + 1500))
		            } else {
		                var e = $("#pots ." + d),
		                    f = $("#groups ul:eq(" +
		                        c + ") li:eq(" + b + ")"),
		                    a = e.css("opacity", ".4").clone().css({
		                        top: e.position().top + "px",
		                        left: e.position().left + "px",
		                        opacity: 1
		                    }).appendTo("#groups").addClass("anime");
		                setTimeout(function() {
		                    a.css({
		                        top: f.position().top + "px",
		                        left: f.position().left + "px"
		                    });
		                    setTimeout(function() {
		                        $("#groups ul:eq(" + c + ") li:eq(" + b + ")").html(a.html());
		                        a.hide()
		                    }, 1E3)
		                }, 200 * c + b * (200 * RAWG.length + 1500))
		            }
		        })
		    })
		}

		function aShuffle(c) {
		    for (var e = c.length; e;) {
		        var b = Math.floor(Math.random() * e),
		            d = c[--e];
		        c[e] = c[b];
		        c[b] = d
		    }
		    return c
		};
	</script>
	<script>
		var reserved = ["FR"];
		var pot = [
		     ["ES", "DE", "_england", "PT", "BE"],
		     ["IT", "RU", "CH", "AT", "HR", "UA"],
		     ["CZ", "SE", "PL", "RO", "SK", "HU"],
		     ["TR", "IE", "IS", "_wales", "AL", "_northern-ireland"]
		 ],
		 pot_b = [pot[1][0], pot[1][1], pot[1][2], pot[1][3], pot[1][4], pot[1][5]],
		 pot_c = [pot[2][0], pot[2][1], pot[2][2], pot[2][3], pot[2][4], pot[2][5]],
		 pot_d = [pot[3][0], pot[3][1], pot[3][2], pot[3][3], pot[3][4], pot[3][5]],
		 group = [{
		     n: "A",
		     m: ["FR", "XX", "XX", "XX"]
		 }, {
		     n: "B",
		     m: ["XX", "XX", "XX", "XX"]
		 }, {
		     n: "C",
		     m: ["XX", "XX", "XX", "XX"]
		 }, {
		     n: "D",
		     m: ["XX", "XX", "XX", "XX"]
		 }, {
		     n: "E",
		     m: ["XX", "XX", "XX", "XX"]
		 }, {
		     n: "F",
		     m: ["XX", "XX", "XX", "XX"]
		 }];
		$(function() {
			init()
		});

		var RAWG;

		function draw() {
		 init();
		 aShuffle(pot_b);
		 aShuffle(pot_c);
		 aShuffle(pot_d);
		 RAWG = [
		     ["FR", pot_b[0], pot_c[0], pot_d[0]],
		     [pot[0][0], pot_b[1], pot_c[1], pot_d[1]],
		     [pot[0][1], pot_b[2], pot_c[2], pot_d[2]],
		     [pot[0][2], pot_b[3], pot_c[3], pot_d[3]],
		     [pot[0][3], pot_b[4], pot_c[4], pot_d[4]],
		     [pot[0][4], pot_b[5], pot_c[5], pot_d[5]]
		 ];
		 RAWG_TEMP = aShuffle([RAWG[1], RAWG[2], RAWG[3], RAWG[4], RAWG[5]]);
		 RAWG = [RAWG[0], RAWG_TEMP[0], RAWG_TEMP[1], RAWG_TEMP[2], RAWG_TEMP[3], RAWG_TEMP[4]];

		 drawAnimation();
		}
		
		function showPopup(){
			reset();
            var str = "{" ;
			$('#groups').find('.groupW').each(function( index ) {
				  var group_name = $(this).find('h3').text();
				  str += '"' + group_name + '":[';
				  $(this).find('ul').find('li').each(function( indexteam ) {
					  	if(indexteam == 3){
	                        str+= '"' +$(this).text() + '"';
					  	}else{
					  		str+= '"' +$(this).text() + '",';
					  	}
				  	
				  });
				  if (index == 5){
                     str += "]";
				  }else{
                     str += "],";
				  } 
			});
			str += "}";
			$('#group_name').val(str);
			$("#logindiv").css("visibility", "visible");
		}
		function validate(){
			var checkValid = true;
			if($('#username').val() == ""){
               $('.errors-username').text('Name is required.');
               $('.errors-username').css("display","block");
               checkValid = false;
			}
			if($('#email').val() == ""){
               $('.errors-email').text('Email is required.');
               $('.errors-email').css("display","block");
               checkValid = false;

			}
			return checkValid;
		}
		function reset(){
			var checkValid = true;
			if($('#username').val() == ""){
               $('.errors-username').text('');
               
			}
			if($('#email').val() == ""){
               $('.errors-email').text('');
			}
			
		}
     
		$( "#enter" ).click(function() {
           if(!validate()){
           	  $("#logindiv").css("display", "block");
           	  
            }else{
            	$("#userdraw" ).submit();
            }
           	
		   
		});
	</script>
@stop