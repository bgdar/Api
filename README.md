<h1 aling=center>
Fake Api Payment Gateway
</h1>

### tech stack 
1. express = untuk membuat Api ini 
2. jsonwebtoken = untuk JWT-> json web token adalah kredensia untuk login **Api**
3. morgan = hanya untuk debug server aja 

### APi 
#### User
`/auth/token` -> mengembalikan Api key atau jwt untuk akses **enpoin** 

#### Payment 
**POST** `/payment/create` -> buat api 
```json 
{
 "amount":50000,           // jumlah nominal yg di bayar ( misal Rp50.00 )
 "currecy" : "IDR",        // mata uang trasaksi (IDR = rupiah , USD = dollar)
 "method" : "card",        // metode pembayaran ( 'card','bank_trasfer','ewallet')
 "card_number":"23343432", // Nomor kartu debit/kredit (dummy tets number )
 "expiry" : "12,25",       // tanggal kadar luarsa kartu ( format mm/yy)
"cvv" : "123"              // 3 digit code keamanan kartu ( card verifacation value )
}
```
_tets_ api menggunakan `curl`
```bash
curl -X POST https://example_url/payment/create \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer fake_token123" \
  -d '{
      "amount":50000,          
      "currecy" : "IDR",      
      "method" : "card",       
      "card_number":"23343432",  
      "expiry" : "12,25",       
      "cvv" : "123"  a"

      }'

```
Response succenss 
```json
{
"payment_id":"pay_12345",
"status" :"pending",
"redirect_url" :"https://fake"
}

```


**GET** `/payments/{id}/status` -> status payment 
_tets_ menggunakan `curl`
```bash
curl -X POST https://example_url/payment/pay_12345/status \
  -H "Authorization: Bearer fake_token123" \
```
Response bisa dummy 
```json 
"payment_id" : "pay_12345",
"status" : "succenss",
"amount" : "50000",
"currecy" : "IDR",
```
**POST** `/payment/{id}/refund`
body 
```json 
{
 "reason" : "customer request"
}
```
_tets_ menggunkan `curl` 
```bash 
curl -X POST https://example_url/payment/pay_12345/refund \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer fake_token123" \
  -d '{
    "reason": "Customer request"
     }'
```

response 
```json 
{
 "refund_id" : "ref_98765",
 "status" : "processed"
}
```
#### trasnsaction 

