@extends('bantuan.layout.master')

@section('title')
PMII - Sarawak Baitulmal Management System (SBMS)
@endsection

@section('styles')

<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Nunito;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Nunito;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Nunito;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>

@endsection

@section('content')
<body>

    <form id="regForm" action="{{ url('/update/pmii-bko/'.$pmiibko->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <h1>Kemaskini Permohonan :</h1>
        <!-- One "tab" for each step in the form: -->

        <!-- MAKLUMAT DIRI -->

        <div class="tab">Maklumat Diri :
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gelaran :</strong><br>
                    <select id="gelaran" name="gelaran">
                        <option value="Cik">Cik</option>
                        <option value="Encik">Encik</option>
                        <option value="Puan">Puan</option>
                    </select>
                    @error('gelaran')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Penuh :</strong>
                    <input type="text" name="nama_penuh" class="form-control" value="{{ $pmiibko->nama_penuh }}">
                    @error('nama_penuh')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jantina :</strong><br>
                    <input type="radio" id="lelaki" name="jantina" value="L">
                    <label for="Lelaki">Lelaki</label><br>
                    <input type="radio" id="perempuan" name="jantina" value="P">
                    <label for="perempuan">Perempuan</label><br>
                    @error('jantina')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tarikh Lahir :</strong><br>
                    <input type="date" id="tarikh_lahir" name="tarikh_lahir">
                    @error('tarikh_lahir')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Umur :</strong>
                    <input type="text" name="umur" class="form-control" value="{{ $pmiibko->umur }}">
                    @error('umur')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Taraf Perkahwinan :</strong><br>
                    <select id="taraf_perkahwinan" name="taraf_perkahwinan">
                        <option value="Bujang">Bujang</option>
                        <option value="Kahwin">Berkahwin</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                        <option value="Balu">Balu</option>
                    </select>
                    @error('taraf_perkahwinan')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bangsa :</strong><br>
                    <select id="bangsa" name="bangsa">
                        <option value="Melayu">Melayu</option>
                        <option value="Cina">Cina</option>
                        <option value="Iban">Iban</option>
                        <option value="Kenyah">Kenyah</option>
                        <option value="Melanau">Melanau</option>
                    </select>
                    @error('bangsa')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama :</strong><br>
                    <select id="agama" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Bukan Islam">Bukan Islam</option>
                    </select>
                    @error('agama')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kewarganegaraan :</strong><br>
                    <select id="warganegara" name="warganegara">
                        <option value="Warganegara">Warganegara</option>
                        <option value="Bukan Warganegara">Bukan Warganegara</option>
                    </select>
                    @error('warganegara')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Kad Pengenalan :</strong>
                    <input type="text" name="no_kp" class="form-control" value="{{ $pmiibko->no_kp }}">
                    @error('no_kp')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <input type="textarea" name="alamat" class="form-control" value="{{ $pmiibko->alamat }}">
                    @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telefon :</strong>
                    <input type="text" name="no_tel" class="form-control" value="{{ $pmiibko->no_tel }}">
                    @error('no_tel')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emel :</strong>
                    <input type="text" name="emel" class="form-control" value="{{ $pmiibko->emel }}">
                    @error('emel')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <!--MAKLUMAT ORGANISASI -->

        <div class="tab">Maklumat Organisasi

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Organisasi :</strong><br>
                    <select id="jenis_organisasi" name="jenis_organisasi">
                        <option value="Kerajaan">Kerajaan</option>
                        <option value="Bukan Kerajaan">Bukan Kerajaan</option>
                    </select>
                    @error('jenis_organisasi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Organisasi :</strong>
                    <input type="text" name="nama_organisasi" class="form-control" value="{{ $pmiibko->nama_organisasi }}">
                    @error('nama_organisasi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Organisasi :</strong>
                    <input type="textarea" name="alamat_organisasi" class="form-control" value="{{ $pmiibko->alamat_organisasi }}">
                    @error('alamat_organisasi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telefon Organisasi:</strong>
                    <input type="text" name="no_tel_organisasi" class="form-control" value="{{ $pmiibko->no_tel_organisasi }}">
                    @error('no_tel_organisasi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emel Organisasi:</strong>
                    <input type="text" name="emel_organisasi" class="form-control" value="{{ $pmiibko->emel_organisasi }}">
                    @error('emel_organisasi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- MAKLUMAT BANK -->

        <div class="tab">Maklumat Bank

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Akaun :</strong><br>
                    <select id="pemilik_akaun_bank" name="pemilik_akaun_bank">
                        <option value="Akaun Sendiri">Akaun Sendiri</option>
                        <option value="Akaun Organisasi">Akaun Organisasi</option>
                    </select>
                    @error('pemilik_akaun_bank')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Bank :</strong>
                    <select id="nama_bank" name="nama_bank">
                        <option value="Bank Kerjasama Rakyat">Bank Kerjasama Rakyat</option>
                        <option value="Agrobank">Agrobank</option>
                        <option value="Bank Simpanan Nasional">Bank Simpanan Nasional</option>
                        <option value="RHB Bank">RHB Bank</option>
                        <option value="CIMB Bank">CIMB Bank</option>
                        <option value="Maybank">Maybank</option>
                    </select>
                    @error('nama_bank')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pemilik Akaun :</strong>
                    <input type="text" name="nama_pemilik" class="form-control" value="{{ $pmiibko->nama_pemilik }}">
                    @error('nama_pemilik')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Akaun Bank :</strong>
                    <input type="text" name="no_akaun_bank" class="form-control" value="{{ $pmiibko->no_akaun_bank }}">
                    @error('no_akaun_bank')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

@endsection

@section('scripts')
<script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

@endsection