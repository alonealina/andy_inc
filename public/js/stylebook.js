function clickFirstButton() {
    var page = document.getElementById('page');
    current_page = page.textContent;

    if (current_page == '表紙') {
        return;
    } else if (current_page == '裏表紙') {
        current_page = 'final';
    }

    document.getElementById(current_page).hidden = true;
    document.getElementById('first').hidden = false;

    page.innerHTML = '表紙';
}

function clickFinalButton() {
    var page = document.getElementById('page');
    current_page = page.textContent;

    if (current_page == '裏表紙') {
        return;
    } else if (current_page == '表紙') {
        current_page = 'first';
    }

    document.getElementById(current_page).hidden = true;
    document.getElementById('final').hidden = false;

    page.innerHTML = '裏表紙';
}


function clickBackButton() {
    var page = document.getElementById('page');
    current_page = page.textContent;

    if (current_page == '表紙') {
        return;
    } else if (current_page == '裏表紙') {
        current_page = 'final';
    }

    document.getElementById(current_page).hidden = true;

    let page_count = document.getElementById("stylebook").childElementCount;
    if (current_page == 'final') {
        back_page = page_count - 2;
    } else if (current_page == 1) {
        back_page = 'first';
    } else {
        back_page = Number(current_page) - 1;
    }

    document.getElementById(back_page).hidden = false;

    if (back_page == 'first') {
        back_page = '表紙';
    }

    page.innerHTML = back_page;
}

function clickNextButton() {
    var page = document.getElementById('page');
    current_page = page.textContent;

    if (current_page == '裏表紙') {
        return;
    } else if (current_page == '表紙') {
        current_page = 'first';
    }

    document.getElementById(current_page).hidden = true;

    let page_count = document.getElementById("stylebook").childElementCount;
    if (current_page == 'first') {
        next_page = 1;
    } else if (current_page == page_count - 2) {
        next_page = 'final';
    } else {
        next_page = Number(current_page) + 1;
    }

    document.getElementById(next_page).hidden = false;

    if (next_page == 'final') {
        next_page = '裏表紙';
    }

    page.innerHTML = next_page;
}

