// Detecta si el navegador tiene MetaMask instalado
if (typeof window.ethereum !== 'undefined') {
    console.log('MetaMask está instalado!');
}

// Crea una función para solicitar el acceso a las cuentas de Ethereum
async function abrirMetaMask() {
    if (typeof window.ethereum !== 'undefined') {
        window.ethereum.request({ method: 'eth_requestAccounts' });
    } else {
        alert('Para usar esta función debes instalar la extensión MetaMask en tu navegador');
    }
}