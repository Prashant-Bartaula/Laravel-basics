<script>
    const exMembers = [
        {
            imgSrc: "https://film.gov.np/media/filmgov/dineshDC_copy_copy.jpg",
            name: "Mr. Dinesh D.C. (Dinesh Raj Dahal)",
            position:
                "Executive Chairperson (Film Director, Producer, Actor, Presenter)",
            email: "fdbnepal@gmail.com",
        },
        {
            imgSrc: "https://film.gov.np/media/filmgov/rajesh_thapa_copy.jpg",
            name: "Mr. Rajesh Kumar Thapa",
            position:
                "Member Secretary - Under Secretary (Law), Ministry of Communication and Information Technology",
            email: " fdbnepal@gmail.com",
        },
        {
            imgSrc: "https://film.gov.np/media/filmgov/WhatsApp_Image_2024-03-26_at_11.26.03_AM.jpeg",
            name: "Mr. Loknath Subedi",
            position:
                "Executive Chairperson (Film Director, Producer, Actor, Presenter)",
            email: "fdbnepal@gmail.com",
        },
        {
            imgSrc: "https://film.gov.np/media/filmgov/323425035_565844378348100_5763012681920590615_n.jpg",
            name: "Mr. Santosh Babu Lohani",
            position: "Board Member (Film Director, Actor)",
            email: "fdbnepal@gmail.com",
        },
        {
            imgSrc: "https://film.gov.np/media/filmgov/WhatsApp_Image_2025-05-16_at_12.45.43_PM.jpeg",
            name: "Birendra P. Bhatta",
            position: "Board Member (Senior Cinematographer)",
            email: " bhattabirendra12@gmail.com",
        },
    ];

    const csrfToken = "{{ csrf_token() }}"; // Laravel CSRF token
    async function sendPostRequest() {
        try {
            const res = await fetch(
                "http://127.0.0.1:8000/api/create-exmembers",
                {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,//to protect from cross site request forgery by sending the csrf token stored in the user browser.
                    },
                    body: JSON.stringify(exMembers),
                }
            );

            const data=await res.json();
            console.log(data);
        } catch (error) {
            console.error(error);
        }
    }

    sendPostRequest();
</script>
