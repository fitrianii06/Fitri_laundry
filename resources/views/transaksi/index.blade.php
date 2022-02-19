@extends('layouts.main')

@section('content')
<div class="card">
<div class="nav-wrapper" >
    <ul class="nav nav-pills nav-fill flex-column flex-md-row "  id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-calendar-grid-58 mr-2"></i>Data Laundry</a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-cloud-upload-96 mr-2"></i>cucian baru
            </a>
        </li>
    </ul>
</div>

<div class="card">
   @if(session('success'))
    <div class="alert alert-success" role="alert" id="success-alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </div>
@endif
    <form method="post" action="/transaksi">
     @csrf
    {{-- @include('transaksi.form') --}}
    @include('transaksi.data')
        <input type="hidden" name="id_member" id="id_member">
    </form>
</div>
</div>
@endsection

@push('scripts')
<script>

    //initialize
    let subtotal = total = 0;
    $(function(){
    $('#tblMember').DataTable(); 
   
    })

//end of initialize

//function pilih member
function pilihMember(x) {
    const tr = $(x).closest('tr')
    const namaJK = tr.find('td:eq(1)').text()+"/"+tr.find('td:eq(2)').text()
    const biodata = tr.find('td:eq(4)').text()+"/"+tr.find('td:eq(3)').text()
    const idMember =tr.find('.idMember').val()
    $('#nama-pelanggan').text(namaJK)
    $('#biodata-pelanggan').text(biodata)
    $('#id_member').val(idMember)
}
//function pilih paket
    function pilihPaket(x){
        const tr = $(x).closest('tr')
        const namaPaket = tr.find('td:eq(1)').text()
        const harga = tr.find('td:eq(2)').text()
        const idPaket = tr.find('.idPaket').val()

        let data = ''
        let tbody = $('#tblTransaksi tbody tr td').text()
        data += '<tr>'
        data += `<td> ${namaPaket} </td>`
        data += `<td> ${harga} </td>`;
        data += `<input type="hidden" name="id_paket[]" value="${idPaket}">`
        data += `<td><input type="number" value="1" min="1" class="qty" name="qty[]" size="2" style="width:40px"></td>`;
        data += `<td><label name="sub_total[]" class="subTotal">${harga}</label></td>`;
        data += `<td><button type="button" class="btnRemovePaket"><span class="ni ni-basket btn-dark"></span></button></td>`;
        data += `</tr>`;

        if($('#tblTransaksi tbody tr td').text() == 'Belum ada data') $('#tblTransaksi tbody tr').remove();

        $('#tblTransaksi tbody').append(data);

        subtotal += Number(harga)
        total = subtotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
        $('#subtotal').text(Number(subtotal))
        $('#total').text(total)
    }

//actions
//pemilihan member
 $('#tblMember').on('click','.pilihMemberBtn', function () {
     console.log('modal')
     pilihMember(this)
     $('#modalMember').modal('hide')
 })
 //pemilihan paket
 $('#tblPaket').on('click','.pilihPaketBtn', function () {
     console.log('modal')
     pilihPaket(this)
     $('#modalPaket').modal('hide')
 })

//function hitung total
function hitungTotalAkhir(a){
    let qty = Number($(a).closest('tr').find('.qty').val());
    let harga = Number($(a).closest('tr').find('td:eq(1)').text());
    let subTotalAwal = Number($(a).closest('tr').find('.subTotal').text());
    let count = qty * harga;
    subtotal = subtotal - subTotalAwal + count
    total = subtotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
    $(a).closest('tr').find('.subTotal').text(count)
    $('#subtotal').text(subtotal)
    $('#total').text(total)
}
//
//onchange qty
$('#tblTransaksi').on('change','.qty', function(){
    hitungTotalAkhir(this)
})
//
//remove paket
$('#tblTransaksi').on('click','.btnRemovePaket', function(){
    let subTotalAwal = parseFloat($(this).closest('tr').find('.subTotal').text());
    subtotal -= subTotalAwal
    total -= subTotalAwal;

    $currentRow = $(this).closest('tr').remove();
    $('#subtotal').text(subtotal)
    $('#total').text(total)
})
//
</script>
@endpush

