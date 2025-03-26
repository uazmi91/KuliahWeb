// main.mjs
import { index, store, destroy } from "./controller.mjs";

const main = () => {
    // Tambahkan 2 data baru
    store({ nama: 'Data 11', umur: 30, alamat: 'Jl. Data 11', email: 'data11@example.com' });
    store({ nama: 'Data 12', umur: 31, alamat: 'Jl. Data 12', email: 'data12@example.com' });

    // Tampilkan semua data
    index();

    // Hapus satu data
    destroy();

    // Tampilkan data setelah penghapusan
    index();
};

main();