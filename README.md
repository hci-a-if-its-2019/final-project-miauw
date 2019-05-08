## Team member:
1. Dandy Naufaldi (05111640000011)
1. Yolanda Hertita Pratama (05111640000052)
1. Rahandi Noor Pasha (05111640000054)

# Contextual Inquiry
## System's Description
![](src/Azure-image.png)

Microsoft Azure is a public cloud computing platform. It provides a range of cloud services, including full virtual machines, databases, file storage, backups, and services for mobile and web apps.

The pricing of Azure is also simpler and cost-effective. Popularly termed as “Pay As You Go”, which means how much you use, pay only for that.

link: [portal.azure.com](https://portal.azure.com)

## System's Bad UI
- No short way to quickly access invoice
- Confusing options on creating new virtual machine resource
- The progress shown by Azure only list the completed steps, no information about remaining steps that need to be done. The progress shown is not informative
- When creating resource from a specific resource group, we still need to specify the resource group in the form
- No options to remove several resource group at once (no option to remove them after checking all of the resource groups)


## Preliminary Question and Instruction Script
### Preliminary Question
- Have you ever heard of cloud technology? Like Azure, AWS ?
- Have you ever used Azure before?
- Are you familiar with accessing remote server?
- Have you ever created or used virtual machine on the cloud before?
### Instruction Script
- open Azure Portal web
- login with ITS email account
- view the billing invoice
- create a Virtual Machine with the following specs:
type B1s, area Asia South East, allow port 22, use static IP, use a new resource group, use premium SSD, use username and password
- check on list of resource groups
- delete the newly created resource group

## User Description
### Participant 1
- The participant is a 20 years old Male user
- Student of Informatics Department ITS
- He is familiar with cloud technology
- He had no experience with Azure
- He is not familiar with accessing remote server
- Never create or use Virtual Machine on the cloud

### Participant 2

### Participant 3

## Transcript
### Participant 1
👨‍🔬 : Miaw Member
👨‍💻 : Participant

 1. **00:01** 👨‍🔬: Halo, nah disini kita mau melakukan Contextual Inquiry buat IMK
 1. **00:04** 👨‍💻: Oke
 1. **00:06** 👨‍🔬: Sebelumnya kita mulai dari pertanyaan permulaan dulu. Pernah denger tentang teknologi cloud, kaya AWS atau Azure, dan sejenisnya?
 1. **00:12** 👨‍💻: Pernah
 1. **00:13** 👨‍🔬: Kalau pakai Azure pernah ngga?
 1. **00:15** 👨‍💻: Ngga pernah
 1. **00:16** 👨‍🔬: Familiar ngga sama ngakses remote server? 
 1. **00:19** 👨‍💻: Tidak
 1. **00:21** 👨‍🔬: Pernah bikin atau make VM (Virtual Machine) di cloud? 
 1. **00:26** 👨‍💻: Tidak 
 1. **00:27** 👨‍🔬: Oke, kalau gitu sekarang coba kamu buka portal Azure terus login pakai email ITS.
 1. **00:36** 👨‍💻: Oke (Participant melakukan login)
 1. **03:07** 👨‍🔬: Nah, ini kan udah buka web nya Azure, sekarang coba kamu cari tampilannya buat Invoice 
 1. **03:13** 👨‍💻: (Participant menuju halaman Cost Management dan Billing, kemudian menuju bagian Invoice tetapi belum sampai menampilkan Invoice pembayaran) Apakah ini invoice?
 1. **03:27** 👨‍🔬: Belum sampe
 1. **03:29** 👨‍💻: Invoice. (Participant menekan tombol dropdown kemudian memilih akun, kemudian muncul tampilan Invoice pembayaran) ini?
 1. **03:46** 👨‍🔬: Iya itu invoice. Nah berikutnya, coba kamu bikin VM 
 1. **04:01** 👨‍💻: (Participant menuju halaman Virtual Machines kemudian menekan button Add untuk membuat VM baru)
 1. **04:32** 👨‍🔬: Nah ini kamu bikin VM tu kamu coba gunakan resource groupnya baru, speknya namanya B1S, areanya Asia Tenggara, aktifkan port buat SSH, silahkan setting username sama password terserah kamu, terus yang terakhir IP nya statis.
 1. **05:28** 👨‍💻: Oke mari kita buat. (Participant membuat VM baru dengan spek yang telah diinstruksikan) Tipenya B1S.. Lho, mahalnya. (setelah mengisi semua field form halaman Basics) Terus apalagi?
 1. **07:15** 👨‍🔬: IP nya tidak berubah, static. 
 1. **07:21** 👨‍💻: (Participant kebingungan berulang-ulang menekan tab networking, basics, disk, management dan masih kebingungan) (**09:06**) Harusnya disini (di tab networking, tapi masih belum menemukan cara untuk mengubah IP secara static) (**10:16**) Ini ngga ada menyerah? wkwkwk
 1. **10:19** 👨‍🔬: Hehe, terserah kamu.
 1. **10:22** 👨‍💻: Harusnya di tab sini (tab networking) (Participant masih berusaha mencari-cari, sampai akhirnya (**11:02**) menemukan cara untuk mengatur IP dengan create new pada public IP kemudian keluar navigasi untuk membuat IP menjadi static) 
 1. **11:20** 👨‍🔬: Yeeee. Oke.. nanti bikin lagi
 1. **11:42** 👨‍💻: Siap. Terus? Apa ini? (setelah user menekan create VM)
 1. **11:47** 👨‍🔬: Iya menurutmu ini dia menampilkan apa? 
 1. **11:50** 👨‍💻: Progress bahwa VM nya di deploy. Nah 
 1. **12:06** 👨‍🔬: Itu kok banyak tapi munculnya?
 1. **12:16** 👨‍💻: Confignya. Nah. 
 1. **12:18** 👨‍🔬: Menurutmu itu dia harus berapa lama lagi menampilkan hasilnya? 
 1. **12:24** 👨‍💻: Hmmm ngga tahu.
 1. **12:26** 👨‍🔬: Ngga tahu ya. (menunggu VM berhasil dibuat)
 1. **13:28** 👨‍💻: Nah udah
 1. **13:30** 👨‍🔬: Nah, sekarang coba kamu bikin kaya tadi satu lagi.
 1. **13:33** 👨‍💻: (Participant membuat VM baru dengan config yang sama dengan lancar) Wuuuu, omg. Kok bisa segini harganya (Participant shock dengan tampilan harga, sebenarnya hanya 1900, murah tetapi Participant tetap shock)
 1. **15:44** 👨‍🔬: Eh kok naik ya harganya dari yang tadi 200? Ooh itu ke reset tadi waktu milih tipenya. (Padahal participant sudah mengubah menjadi B1S) Btw itu tadi cuma 1900, bukan 1,9 juta.
 1. **16:22** 👨‍💻: Oke sudah ni
 1. **16:24** 👨‍🔬: Belum sek sabar masih bikin
 1. **16:28** 👨‍💻: Tak tinggal minum bisa ngga? 
 1. **16:33** 👨‍🔬: Oke silahkan (masih menunggu VM berhasil dibuat) (**17:59**) Nah tadi itu kan kamu waktu bikin VM kamu bikin resource grup baru, nah, 2 resource grup yang baru kamu buat tadi coba kamu hapus.
 1. **19:20** 👨‍💻: Resource group? (User kebingungan mencari halaman resource group di section sebelah kiri, setelah scroll section di sebelah kiri) Naaah akhirnya. (user menuju halaman resource group kemudian mencentang 2 resource group ) Nah sekarang deletenya ini dimana (user kebingungan menghapus, berulang kali mencentang, klik klik, klik kanan) 
 1. **23:11** 👨‍🔬: (Baru mnyadari kalau resource yang dicentang lebih dari 2,button dropdown nya hilang, dan kalau dicentang 1 kemudian diklik kanan, muncul tombol delete) 
 1. **23:14** 👨‍💻: Waah ini apa-apaan, satu-satu aja dah ya
 1. **23:20** 👨‍🔬: Yawes.
 1. **23:23** 👨‍💻: (Participant menghapus satu per satu pada akhirnya dan berhasil menghapus kedua resource group yang baru dibuat)
 1. **24:02** 👨‍🔬: Yeee akhirnya. Sudah nih, makasih yaaaa.
 1. **24:04** 👨‍💻: Oke sama sama, semangat!
