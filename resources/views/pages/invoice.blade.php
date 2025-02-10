
@extends('layout.backend.main');
@section('page-content')
<style>
    @media print {
        body * {
            visibility: hidden; /* Hide everything except invoice */
        }

        #invoice, #invoice * {
            visibility: visible;
        }

        #invoice {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            padding: 20px;
        }

        /* Ensure company details remain on the right */
        .company-details {
            text-align: right;
            float: right;
            width: 50%;
        }

        /* Keep invoice details (invoice number, dates) aligned to the right */
        .invoice-details {
            text-align: right;
            float: right;
            width: 50%;
        }

        /* Ensure table alignment */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tfoot td {
            text-align: right; /* Keep totals aligned to the right */
        }
    }
</style>

<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Invoice</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
            </ol>
        </nav>
    </div>
    <div class="ml-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <div class="toolbar hidden-print">
            <div class="text-right">
                {{-- <button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Print</button> --}}
                <button type="button" class="btn btn-dark" onclick="printInvoice()">
                    <i class="fa fa-print"></i> Print
                </button>

                <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
            </div>
            <hr/>
        </div>
        <div id="invoice">

            <div class="invoice overflow-auto">
                <div style="min-width: 600px">
                    <header>
                        <div class="row">
                            <div class="col">
                                <a href="javascript:;">
                                    <img src="assets/images/logo-icon.png" width="80" alt="" />
                                </a>
                            </div>
                            <div class="col company-details">
                                <h2 class="name">
                            <a target="_blank" href="javascript:;">
                            Arboshiki
                            </a>
                        </h2>
                                <div>455 Foggy Heights, AZ 85004, US</div>
                                <div>(123) 456-789</div>
                                <div>arboshiki@yahoo.com</div>
                            </div>
                        </div>
                    </header>
                    <main>
                        <div class="row contacts">
                            <div class="col invoice-to">
                                <div class="text-gray-light">INVOICE TO:</div>
                                <h2 class="to">Shahadat Hossain</h2>
                                <div class="address">796 Silver Harbour, TX 79273, US</div>
                                <div class="email"><a href="mailto:shahadat@gmail.com">shahadat@gmail.com</a>
                                </div>
                            </div>
                            <div class="col invoice-details">
                                <h1 class="invoice-id">INVOICE A-02-2568</h1>
                                <div class="date">Date of Invoice: 05/02/2025</div>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th class="text-left">PRODUCT NAME</th>
                                    <th class="text-right">PRODUCT PRICE</th>
                                    <th class="text-right">QUANTITY</th>
                                    <th class="text-right">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="no">01</td>
                                    <td class="text-left">
                                        <h3>Samsung Galaxy S24 Ultra</h3> 12/256 Variant </td>
                                    <td class="unit">$500.00</td>
                                    <td class="qty">1</td>
                                    <td class="total">$500.00</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">SUBTOTAL</td>
                                    <td>$500.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">TAX 5%</td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">GRAND TOTAL</td>
                                    <td>$525.00</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="thanks">Thank you!</div>
                        <div class="notices">
                            <div>NOTICE:</div>
                            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                        </div>
                    </main>
                    <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                </div>
                <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                <div></div>
            </div>
        </div>
    </div>
</div>

<script>
    function printInvoice() {
        var invoice = document.getElementById('invoice').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = invoice;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>




@endsection
