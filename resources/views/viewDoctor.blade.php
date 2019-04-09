@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <br>
            <h1>dr. Namira Atasya, Sp.PD</h1>
            <a href="#" class="text-decoration-none"><h3>Dokter Penyakit Dalam</h3></a>
            <br>

<!-- Doctor Profile -->
            <p class="font-weight-bold">
                Profil Dokter
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
            </p>
            <p>
                Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
            </p>
            <br>
<!-- Doctor Education -->
            <p class="font-weight-bold">
                Pendidikan Dokter
            </p>
                
            <p>
                dr. - Ilmu Kedokteran Umum - Poltekkes Malang, 2018
            </p>
            <p>
                Sp.PD - Spesialis Penyakit Dalam - Poltekkses Malang, 2019
            </p>
            <br>
<!-- Doctor Email -->
            <p class="font-weight-bold">
                Email Dokter
            </p>

            <p>
                namiraatasya@gmail.com
            </p>
        
        </div>



        <div class="col-md-4">
<!-- card doctor -->
            <div class="card" style="width: 18rem;">
                <br> <br>
                <img src="{{ asset('storage/images/namira.jpg') }}" class="card-user-profile-photo " alt="...">
                    
                <div class="card-body ">          
                    <h5 class="text-center">dr. Namira Atasya, Sp.PD</h5>
                    <a href="#" class="text-decoration-none"><p class="text-center">Dokter Penyakit Dalam</p></a>
                    <br><br>
                    <!-- Tindakan Medis -->
                    <p class="font-weight-bold">Tindakan Medis : </p>
                    <ul class="col-sm-10">
                        <li>Konsultasi Penyakit Dalam</li>
                        <li>Konsultasi Imunologi</li>
                        <li>Terapi Alergi</li>
                    </ul>
                </div>
            </div>       

        </div>

    
    
    
    </div>
</div>
@endsection
