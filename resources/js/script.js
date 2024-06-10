$('#search-button').on('click', function (){
  
    $.ajax({
      url: 'https://api.binderbyte.com/v1/track?api_key=d4eaed3fd2d06733074fa8f4851d7568207554368e5a31b1d097fa234b248d1f',
      type: 'get',
      dataType: 'json',
      data: {
        'courier' : $('#courier_input').val(),
        'awb': $('#awb_input').val(),
      },
  
        success:function(result){
          if (result.status == 200){
            let resi = result.data;
            console.log(resi);
            $('#resi-status').html(`
            <div class="text-white mt-8">
            <table class="border-collapes border border-white  ">
                <tr>
                <th class="w-1 py-2" colspan="2">Status Pengiriman</th>
                </tr> 
                <tr>
                    <th class="w-60 py-2 border border-white">Status</th>
                    <td class="w-1/2 py-2 border border-white">` + resi.summary.status + `</td>
                </tr>
                <tbody>
                <tr>
                    <th class="w-1/2 py-2 border border-white">Layanan</th>
                    <td class="w-1/2 py-2 border border-white">` + resi.summary.service + `</td>
                </tr>
                <tr>
                    <th class="w-1/2 py-2  border border-white">Pengirim</th>
                    <td class="w-1/2 py-2 border border-white">` + resi.detail.shipper + `</td>
                </tr>
                <tr>
                    <th class="w-1/2 py-2 border border-white">Asal</th>
                    <td class="w-1/2 py-2 border border-white">` + resi.detail.origin + `</td>
                </tr>
                <tr>
                    <th class="w-1/2 py-2 border border-white">Penerima</th>
                    <td class="w-1/2 py-2 border border-white">` + resi.detail.receiver + `</td>
                </tr>
                <tr>
                    <th class="w-1/2 py-2 border border-white">Tujuan</th>
                    <td class="w-1/2 py-2 border border-white">` + resi.detail.destination + `</td>
                </tr>
                </tbody>
            </table>
            </div>
            `)
  
        } else {
          $('#resi-result').html(`
          <div class ="col">
          <h1 class = "text-center">` + result.message +`</h1>
          </div>
          `)
        }
      }
  });
  
  });