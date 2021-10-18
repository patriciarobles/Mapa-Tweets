Este proyecto se realizó en enero del 2020, y consiste en un mapa de España en SVG que se va iluminando a medida que se tuitea desde esa comunidad y a su vez se muestra el tweet correspondiente.

1. En el archivo showTweets, añadir las keys de la cuenta de Twitter en las líneas 17 al 20
2. Configurar el archivo .env:
2.1. INTERVAL_MAP para definir el tiempo entre cada una de las llamadas a la API de Twitter
2.2. MAPA_LIST array con el listado de tweets que se quieren mostrar