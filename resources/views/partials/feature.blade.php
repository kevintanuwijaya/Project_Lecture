<section class="page-section feature" id="feature">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Features</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Features Grid Items-->
        <div class="row justify-content-center">
            <!-- Feature Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="feature-item mx-auto" data-bs-toggle="modal" data-bs-target="#featureModal1">
                    <div class="feature-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="feature-item-caption-content text-center text-white">
                            <img class="img-fluid" style="height: 5em; width: 5em"
                                src="https://cdn.discordapp.com/attachments/895156326865444904/923837534918823956/topUp.png"
                                alt="..." />
                        </div>
                    </div>
                    <img class="img-fluid"
                        src="https://cdn.discordapp.com/attachments/895156326865444904/923843155688824862/topUp.png"
                        alt="..." />
                </div>
            </div>
            <!-- feature Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="feature-item mx-auto" data-bs-toggle="modal" data-bs-target="#featureModal2">
                    <div class="feature-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="feature-item-caption-content text-center text-white">
                            <img class="img-fluid" style="height: 5em; width: 4.2em"
                                src="https://cdn.discordapp.com/attachments/895156326865444904/923847077597941770/TamngIcon.png"
                                alt="..." />
                        </div>
                    </div>
                    <img class="img-fluid"
                        src="https://cdn.discordapp.com/attachments/895156326865444904/923847584269873162/Tameng.png"
                        alt="..." />
                </div>
            </div>
            <!-- feature Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="feature-item mx-auto" data-bs-toggle="modal" data-bs-target="#featureModal3">
                    <div class="feature-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="feature-item-caption-content text-center text-white">
                            <img class="img-fluid" style="height: 5em; width: 5em"
                                src="https://cdn.discordapp.com/attachments/895156326865444904/923847399003291668/InformationIcon.png"
                                alt="..." />
                        </div>
                    </div>
                    <img class="img-fluid"
                        src="https://cdn.discordapp.com/attachments/895156326865444904/923843156074713108/Information.png"
                        alt="..." />
                </div>
            </div>
        </div>
</section>

<!-- Features Modals-->
<!-- Feature Modal 1-->
<div class="feature-modal modal fade" id="featureModal1" tabindex="-1" aria-labelledby="featureModal1"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Feature Modal - Title-->
                            <h2 class="feature-modal-title text-secondary text-uppercase mb-0">Top Up</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <form action="/topup" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="voucherID" id="voucher" type="text"
                                        placeholder="Enter your voicher code here..." data-sb-validations="required" />
                                    <label for="voucher">Voucher Code</label>
                                    <div class="invalid-feedback" data-sb-feedback="voucher:required">Voucher code is
                                        required.</div>
                                </div>
                                <input type="hidden" name="email" value='{{ $user->email }}'>
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-plus fa-fw"></i>
                                    Top Up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature Modal 2-->
<div class="feature-modal modal fade" id="featureModal2" tabindex="-1" aria-labelledby="featureModal2"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- feature Modal - Title-->
                            <h2 class="feature-modal-title text-secondary text-uppercase mb-0">My Current Transaction
                            </h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            @if ($transactions)
                                <table class="table align-middle">
                                    @foreach ($transactions as $transaction)
                                        <tbody>
                                            <tr>
                                                <td class="text-start">
                                                    Locker ID
                                                </td>
                                                <td class="text-start">
                                                    {{ $transaction->LockerID }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Locker Name
                                                </td>
                                                <td class="text-start">{{ $transaction->LockerName }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Start Time
                                                </td>
                                                <td class="text-start">
                                                    {{ $transaction->TransactionStart }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Locker Location
                                                </td>
                                                <td class="text-start">
                                                    {{ $transaction->LockerLocation }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            @else
                                <h2>No Active Transaction</h2>
                            @endif
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature Modal 3-->
<div class="feature-modal modal fade" id="featureModal3" tabindex="-1" aria-labelledby="featureModal3"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- feature Modal - Title-->
                            <h2 class="feature-modal-title text-secondary text-uppercase mb-0">My Transaction History
                            </h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            @if ($histories)
                                <table class="table align-middle">
                                    @foreach ($histories as $history)
                                        <tbody>
                                            <tr>
                                                <td class="text-start">
                                                    Locker ID
                                                </td>
                                                <td class="text-start">
                                                    {{ $history->LockerID }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Locker Name
                                                </td>
                                                <td class="text-start">{{ $history->LockerName }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Start Time
                                                </td>
                                                <td class="text-start">
                                                    {{ $history->TransactionStart }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    End Time
                                                </td>
                                                <td class="text-start">
                                                    {{ $history->TransactionEnd }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Locker Location
                                                </td>
                                                <td class="text-start">
                                                    {{ $history->LockerLocation }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">
                                                    Transaction Price
                                                </td>
                                                <td class="text-start">
                                                    IDR {{ number_format($history->TransactionPrice, 2) }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            @else
                                <h2>No Active Transaction</h2>
                            @endif
                            <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
