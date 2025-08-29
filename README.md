<h1 align="center">Books Api <h1/>
<p align="center">api books <p/>


### Tech stack
<p align="center">
    <a href="https://skillicon.dev">
        <img src="https://skillicon.dev/icons?i=php,sqlite,vim,linux&perline=4" />
    <a/>
</p>


### Enpoint 
#### Books
1. GET `/books` -> banner 
2. GET `/books/all` -> ambil semua daftar data 
2. GET `/books/{id}` -> ambil detail buku berdasarkan id
3. POST `/books` -> tambah buku baru 
4. PUT  `/books/{id}` -> update data buku berdasrkan id 
5. DELETE `/books/{id}` -> hapus buku berdasarkan id 

6. GET `books/serach?title=...` -> cari buku berdasarkan judul 
7. GET `/books/catagory/{name}` -> filter buku berdasarkan katagory
#### Books Api format 
```json 
{
    id : int ,
    title : string ,
    author : string ,
    published_year : int ,
    language : string 
    catagory : string ,
    country : string

}

```


### running 
```bash
php -S localhost:8000 main.php

```

### tets Api 
```bash 
# tets url books
curl -X GET http://localhost:8000/books
# test dan simpan ke file 
curl -X GET http://localhost:8000/books/all --output result.json
```

### clone spesifik branch
```bash 
# format :
git clone --branch nama_branch  --single-branch https://github.com/bgdar/Api.git
# contoh untuk branch project ini 
git clone --branch php --single-branch https://github.com/bgdar/Api.git
```
