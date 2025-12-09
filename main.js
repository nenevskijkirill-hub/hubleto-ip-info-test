const form = document.getElementById('ipForm');
const resultDiv = document.getElementById('result');
const favoritesDiv = document.getElementById('favorites');

loadFavorites();

form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const ip = document.getElementById('ip').value.trim();
    if (!ip) return;

    try {
        const res = await fetch(`https://ipwhois.app/json/${ip}`);
        const info = await res.json();

        if (info.success === false) {
            resultDiv.innerHTML = `<p>Chyba: ${info.message}</p>`;
            return;
        }

        resultDiv.innerHTML = `
            <h3>Informácie o IP: ${ip}</h3>
            <ul>
                <li><strong>Krajina:</strong> ${info.country}</li>
                <li><strong>Mesto:</strong> ${info.city}</li>
                <li><strong>ISP:</strong> ${info.isp}</li>
                <li><strong>Organizácia:</strong> ${info.org}</li>
                <li><strong>Štát:</strong> ${info.region}</li>
                <li><strong>Časové pásmo:</strong> ${info.timezone}</li>
            </ul>
            <button id="saveBtn">Uložiť do obľúbených</button>
        `;

        document.getElementById('saveBtn').onclick = async () => {
            await fetch('save_favorite.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ ip, info })
            });
            loadFavorites();
        };

    } catch (err) {
        resultDiv.innerHTML = `<p>Chyba pri načítaní informácií: ${err.message}</p>`;
    }
});

async function loadFavorites() {
    try {
        const res = await fetch('load_favorites.php');
        const favorites = await res.json();
        favoritesDiv.innerHTML = '';

        for (const ip in favorites) {
            const data = favorites[ip];
            const div = document.createElement('div');
            div.className = 'favorite';
            div.innerHTML = `
                <h4>${ip}</h4>
                <ul>
                    <li><strong>Krajina:</strong> ${data.country}</li>
                    <li><strong>Mesto:</strong> ${data.city}</li>
                    <li><strong>ISP:</strong> ${data.isp}</li>
                    <li><strong>Organizácia:</strong> ${data.org}</li>
                    <li><strong>Štát:</strong> ${data.region}</li>
                    <li><strong>Časové pásmo:</strong> ${data.timezone}</li>
                </ul>
            `;
            favoritesDiv.appendChild(div);
        }
    } catch (err) {
        favoritesDiv.innerHTML = `<p>Chyba pri načítaní obľúbených: ${err.message}</p>`;
    }
}




