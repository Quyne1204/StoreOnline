function format(money) {
    const formattedAmount = money.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
    return formattedAmount;
}

window.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.format-VND');
    elements.forEach((element) => {
        const value = element.innerHTML;
        const formattedValue = format(parseInt(value));
        element.innerHTML = formattedValue;
    });
});