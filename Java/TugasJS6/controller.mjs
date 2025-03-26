// controller.mjs
import users from "./data.mjs";

const index = () => {
    console.log("Daftar Pengguna:");
    users.map((user, index) => {
        console.log(`${index + 1}. Nama: ${user.nama}, Umur: ${user.umur}, Alamat: ${user.alamat}, Email: ${user.email}`);
    });
};

const store = (user) => {
    users.push(user);
    console.log(`Pengguna baru ditambahkan: ${user.nama}`);
};

const destroy = () => {
    if (users.length > 0) {
        const removedUser = users.pop();
        console.log(`Pengguna terakhir dihapus: ${removedUser.nama}`);
    } else {
        console.log("Tidak ada data pengguna untuk dihapus.");
    }
};

export { index, store, destroy };