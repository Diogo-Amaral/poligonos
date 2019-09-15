# API - Polígonos
Yii2 Framework
---
Cadastra retângulos e triângulos - Soma áreas dos polígonos




## Instalação

**Docker-compose**

```
docker-compose up
```

**Configurando migrations**

```
./yii migrate
```

## Métodos - URLs



**GET**


`/v1/retangulo`


`/v1/triangulo`


`/v1/soma-areas`


**POST**


`/v1/retangulo`


`/v1/triangulo`


**GET | POST | PUT | DELETE**


`/v1/retangulo/:id`


`/v1/triangulo/:id`


**Example Request body - POST | PUT**


```
{
  "base": 10,
  "altura":20
}
```

