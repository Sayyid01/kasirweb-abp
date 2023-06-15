const totalHarga = (dataList) => {
    let total = 0;

    if (dataList.length == 0) {
        return 0
    }

    dataList.map((val) => {
        total += val.harga;
    })

    return total
}

const similiar = (dataCheck, sim) => {
    for (let index = 0; index < dataCheck.length; index++) {
        const element = dataCheck[index];

        if (element.nama_menu === sim.nama_menu) {
            return true;
        }
    }

    return false;
}

const priceInK = (price) => {
    let strPrice = price.toString();;
    let priceRtn;

    switch (strPrice.length) {
        case 4:
            priceRtn = strPrice.slice(0,1) + "K"
            break;

        case 6:
            priceRtn = strPrice.slice(0,3) + "K"
            break;

        default:
            priceRtn = strPrice.slice(0,2) + "K"
            break;
    }

    return priceRtn;
}
