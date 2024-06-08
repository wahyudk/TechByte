document.addEventListener('DOMContentLoaded', function() {
    const articles = [
        {
            title: "Apple Vision Pro dan Penggunaan yang Tidak Tepat",
            imageSrc: "assets/1.jpg",
            content: "Apple Vision Pro menjadi teknologi teranyar yang sudah ditunggu-tunggu banyak penggemarnya.",
            link: "#"
        },
        {
            title: "Asus ROG Phone 8, 8 Pro, dan 8 Pro Edition Resmi di Indonesia, Ini Harganya",
            imageSrc: "assets/2.png",
            content: "Asus resmi meluncurkan ponsel gaming terbarunya, ROG Phone 8 Series di Indonesia, Rabu (20/3/2024). Ada tiga model yang dirilis, yaitu Asus ROG Phone 8 reguler, ROG 8 Pro, dan ROG Phone 8 Pro Edition. Ketiha HP gaming ROG Phone 8 series ini sudah lebih dulu diperkenalkan di pasar global, melalui ajang Consumer Electronics Show (CES) 2024, di Las Vegas, Amerika Serikat, pada awal Januari lalu.",
            link: "#"
        },
        {
            title: "Google Bikin Vlogger, AI untuk Sulap Foto Jadi Hidup dan Berbicara",
            imageSrc: "assets/3.jpg",
            content: "Peneliti Google tengah mengembangkan teknologi kecerdasan buatan (Artificial Intelligence/AI) yang bisa menyulap wajah seseorang dalam foto menjadi seolah hidup. Teknologi tersebut bernama Google Vlogger. Hasil akhirnya, Google Vlogger bisa mengubah foto statis menjadi sebuah video pendek yang bisa bergerak dan berbicara.  Salah satu aplikasi utama model ini adalah pada terjemahan video. Dalam hal ini, AI Vlogger mengambil video yang ada dalam bahasa tertentu, dan mengedit area bibir dan wajah agar konsisten dengan audio baru, misalnya, bahasa Spanyol. Teknologi ini mirip dengan tren aplikasi MyHeritage pada 2021 lalu. Situs silsilah keluarga MyHeritage, menyediakan sebuah fitur yang disebut dengan Deep Nostalgia.6",
            link: "#"
        }
    ];

    const articleSection = document.getElementById('artikel-section');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentArticleIndex = 0;

    function showArticle(index) {
        const article = articles[index];
        articleSection.innerHTML = `
            <article>
                <h2>${article.title}</h2>
                <img src="${article.imageSrc}" alt="">
                <p>${article.content}</p>
                <a href="${article.link}">Selengkapnya...</a>
            </article>
        `;
    }

    prevBtn.addEventListener('click', function() {
        currentArticleIndex = (currentArticleIndex - 1 + articles.length) % articles.length;
        showArticle(currentArticleIndex);
    });

    nextBtn.addEventListener('click', function() {
        currentArticleIndex = (currentArticleIndex + 1) % articles.length;
        showArticle(currentArticleIndex);
    });

    // Show initial article
    showArticle(currentArticleIndex);
});