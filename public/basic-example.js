var chart_config = {
    chart: {
        container: "#basic-example",

        connectors: {
            type: "step",
        },
        node: {
            HTMLclass: "nodeExample1",
        },
    },
    nodeStructure: {
        text: {
            name: "Ketua Yayasan",
            title: "Nyi sri fitriyani",
        },
        image: "../headshots/ketua.jpg",
        children: [
            {
                text: {
                    name: "Wakil Ketua",
                    title: "Ki Denis Kristianto",
                },
                image: "../headshots/wakil.jpg",
                children: [
                    {
                        text: {
                            name: "Pantera",
                            title: "Ki Prono Aji",
                        },
                        image: "../headshots/prono.jpg",
                        children: [
                            {
                                text: {
                                    name: "Kabib Organisasi & psdm",
                                    title: "Ki Prono Aji",
                                },
                                image: "../headshots/prono.jpg",
                                children: [
                                    {
                                        text: {
                                            name: "Wakabid Organisasi & psdm",
                                            title: "Ki Joko Suyono",
                                        },
                                        image: "../headshots/wakabid_organisasi.jpg",
                                    },
                                ],
                            },
                            {
                                text: {
                                    name: "Kabid Pendidikan & Kebudayaan",
                                    title: "Ki Tamim Makruf",
                                },
                                image: "../headshots/kabid.jpg",
                                children: [
                                    {
                                        text: {
                                            name: "Wakabid Pendidikan & Kebudayaan",
                                            title: "Ki Fuad Rohmansyah",
                                        },
                                        image: "../headshots/wakabid_pendidikan.jpg",
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        text: {
                            name: "Bendahara",
                            title: "Nyi Kusdwiastuti",
                        },
                        image: "../headshots/bendahara.jpg",
                        children: [
                            {
                                text: {
                                    name: "Kabid Kekeluargaan & Kemasyarakatan",
                                    title: "Nyi miah",
                                },
                                image: "../headshots/kekel.jpg",
                                children: [
                                    {
                                        text: {
                                            name: "Wakabid Kekeluargaan & kemasyarakatan",
                                            title: "Ni Mien Suswanti",
                                        },
                                        image: "../headshots/wakabid_kekeluargaan.jpg",
                                    },
                                ],
                            },
                            {
                                text: {
                                    name: "Kabis Usaha ekonomi & koperasi",
                                    title: "Ki muhammad Aufaq",
                                },
                                image: "../headshots/usaha.jpg",
                                children: [
                                    {
                                        text: {
                                            name: "Wakabid Usaha ekonomi & koperasi",
                                            title: "Ki Mardisuroso",
                                        },
                                        image: "../headshots/wakabid_usaha.jpg",
                                    },
                                ],
                            },
                        ],
                    },
                ],
            },
        ],
    },
};
