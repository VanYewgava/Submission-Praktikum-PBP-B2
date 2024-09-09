function validateForm() {
                const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                const selectedCount = checkboxes.length;

                // Cek apakah jumlah checkbox yang dipilih kurang dari 3
                if (selectedCount < 3) {
                    alert("Anda harus memilih setidaknya 3 dari 5 jasa kirim.");
                    return false; // Mencegah form submit
                }

                return true; // Melanjutkan submit form jika validasi lolos
            }

            <script>
            function validateForm() {
                const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                const selectedCount = checkboxes.length;

                // Cek apakah jumlah checkbox yang dipilih kurang dari 3
                if (selectedCount < 3) {
                    alert("Anda harus memilih setidaknya 3 dari 5 jasa kirim.");
                    return false; // Mencegah form submit
                }

                const grosirYa = document.getElementById("ya").checked;
                const hargaGrosir = document.getElementById("fhargaGrosir").value;

                // Cek apakah radio "Ya" pada Grosir dipilih dan harga grosir tidak diisi
                if (grosirYa && hargaGrosir === "") {
                    alert("Anda harus mengisi Harga Grosir jika memilih Ya pada Grosir.");
                    return false; // Mencegah form submit
                }

                return true; // Melanjutkan submit form jika validasi lolos
            }

            const subKategoriOption ={
                baju:[
                    {value:"bajuPria", text:"Baju Pria"},
                    {value:"bajuWanita", text:"Baju Wanita"},
                    {value:"bajuAnak", text:"Baju Anak"},
                ],
                elektronik:[
                    {value:"mesinCuci", text:"Mesin Cuci"},
                    {value:"kulkas", text:"Kulkas"},
                    {value:"ac", text:"AC"},
                ],
                alatTulis:[
                    {value:"kertas", text:"Kertas"},
                    {value:"map", text:"Map"},
                    {value:"pulpen", text:"Pulpen"},
                ]
            };
            function updateSubKategori(){
                const kategoriSelect = document.getElementById("fkategori");
                const subKategoriSelect = document.getElementById("fsubKategori");
                const selectedKategori = kategoriSelect.value;

                subKategoriSelect.innerHTML='<option value="">--Pilih Sub Kategori--</option>';

                if(selectedKategori){
                    subKategoriOption[selectedKategori].forEach(option => {
                        const newOption = document.createElement("option");
                        newOption.value = option.value;
                        newOption.textContent = option.text;
                        subKategoriSelect.appendChild(newOption);
                    });
                }
            }

		</script>