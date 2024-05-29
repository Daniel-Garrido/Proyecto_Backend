
//variables locales 
const apiKey = 'AIzaSyDjWPUjTW1DDho8QVHG8v_XNN6CtNEIUF4';
const originalText = {};

// Función para decodificar entidades HTML
function decodeHTMLEntities(text) {
    const textarea = document.createElement('textarea');
    textarea.innerHTML = text;
    return textarea.value;
}
//funcion asincrona 
async function translateText(text, targetLanguage) {
    const url = `https://translation.googleapis.com/language/translate/v2?key=${apiKey}`;//api de google translate
   
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                q: text,
                target: targetLanguage
            })
        });
        const data = await response.json();
        const translatedText = data.data.translations[0].translatedText;
        return decodeHTMLEntities(translatedText);
    } catch (error) {
        console.error('Error translating text:', error);
        return text; // Return original text if translation fails
    }
}

//funcion asincrona
async function translatePage(targetLanguage) {
    // Function to get all text nodes
    function getTextNodes(node) {
        const textNodes = [];
        if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== '') {
            // Check if the parent node or any ancestor has the class 'no-translate'
            let currentElement = node.parentElement;
            let skipTranslation = false;

           //agregamos una clase para los elementos que no serán traducidos 
            while (currentElement) {
                if (currentElement.classList && currentElement.classList.contains('no-translate')) {
                    skipTranslation = true;
                    break;
                }
                currentElement = currentElement.parentElement;
            }

            if (!skipTranslation) {
                textNodes.push(node);
            }
        } else {
            for (let child of node.childNodes) {
                textNodes.push(...getTextNodes(child));
            }
        }
        return textNodes;
    }

    const textNodes = getTextNodes(document.body);

    for (let textNode of textNodes) {
        const originalTextContent = textNode.nodeValue.trim();
        if (originalTextContent !== '') {
            if (!originalText[textNode]) {
                originalText[textNode] = originalTextContent;
            }
            const translatedText = await translateText(originalTextContent, targetLanguage);
            textNode.nodeValue = translatedText;
        }
    }
}

// lista de eventos para los botones de traduccion 
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.translate-button');
    buttons.forEach(button => {
        button.addEventListener('click', async () => {
            const language = button.getAttribute('data-language');
            await translatePage(language);
        });
    });
});
