<meta charset="utf-8">
<link href="../img/logo.png" rel="shortcut icon">
<title>Turf Admin Panle - TurfEase</title>
{{-- <!-- BEGIN: CSS Assets-->
<link rel="stylesheet" href="turfAdmin/dist/css/app.css" /> --}}
<!-- END: CSS Assets-->
{{-- Google Font CDN --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite('resources/css/app.css')

<style>
    /* Additional CSS for smooth transitions */
    #sidebar {
        transition: width 0.5s ease;
    }

    #sidebar.collapsed:hover {
        width: 18rem;
    }

    #sidebar.collapsed:hover .sidebar-title {
        display: block;
    }

    #sidebar.collapsed:hover .sidebar-icon {
        padding: 0px;
        width: 91%;
        box-shadow: none;
    }


    /*
    .sidebar-icon {
        display: none;
    } */

    .glassy-icon {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    #sidebar.collapsed {
        width: 80px;
    }

    #sidebar.collapsed .side-middle {
        display: flex;
        justify-content: center;
    }

    #sidebar.collapsed .side-logo {
        width: 3.75rem;
        height: auto;
        transition: 0.3s all ease-in-out;
    }

    #sidebar.collapsed:hover .side-logo {
        width: 2.75rem;
        height: auto;
    }

    #sidebar.collapsed .sidebar-hide {
        display: none;
    }

    #sidebar.collapsed .sidebar-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0px;
        width: 45px;
        height: 45px;
        border-radius: 50px;
        box-shadow: rgb(85 85 85 / 67%) 0px 8px 24px;
    }

    .shadow-one {
        box-shadow: rgb(0 0 0 / 37%) 0px 8px 24px;
    }

    #sidebar.collapsed .sidebar-title {
        display: none;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        #sidebar {
            width: 64px;
        }

        #sidebar.collapsed {
            width: 64px;
        }

        #sidebar.collapsed .sidebar-title {
            display: none;
        }

        #sidebar.collapsed .sidebar-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }
    }

    #navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        transition: top 0.3s;
        /* Add a smooth transition effect */
    }
</style>
