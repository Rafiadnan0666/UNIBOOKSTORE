@extends('master.dash')

@section('konten')
<style></style>
    <div class="row">
        <div class="col-md-6 col-lg-6 btn btn-primary">
            <a href="{{ route('buku.index') }}" class="counter-link btn btn-primary">
                <div class="counter-section margin-bottom-30">
                    <div class="counter-icon">
                        <i class="fa fa-user-tie fa-beat-fade yellow_color"></i>
                    </div>
                    <div class="counter-no">
                        <p class="total-no">{{ $buku->count() }}</p>
                        <p class="head-couter">Buku</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-6 btn btn-warning">
            <a href="{{ route('penerbit.index') }}" class="counter-link btn btn-warning">
                <div class="counter-section margin-bottom-30">
                    <div class="counter-icon">
                        <i class="fa-solid fa-users green_color fa-flip"></i>
                    </div>
                    <div class="counter-no">
                        <p class="total-no">{{ $penerbit->count() }}</p>
                        <p class="head-couter">Penerbit</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection