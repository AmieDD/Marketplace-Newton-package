[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Newton/functions?utm_source=RapidAPIGitHub_NewtonFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Newton Package
Newton does anything from numerical calculation to symbolic math parsing.
* Domain: newton.now.sh


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## Newton.simplifyExpression
Simplify expression

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 2^2+2(2), result: 8

## Newton.factoringExpression
Factoring expression

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: x (x + 2)

## Newton.findDerivative
Find derivative

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: 2 x + 2

## Newton.integrateExpression
Integrate expression

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: 1/3 x^3 + x^2 + C

## Newton.findZeros
Finding zeros

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: [-2, 0]

## Newton.findTangent
Finding tangent

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 2&#124;x^3, result: 12 x + -16

## Newton.getAreaUnderCurve
Get area under curve

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 2:4&#124;x^3, result: 60

## Newton.getCosine
Get cosine

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: pi, result: -1

## Newton.getSine
Get sine

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0

## Newton.getTangent
Get tangent

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0

## Newton.getInverseCosine
Get inverse cosine

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 1, result: 0

## Newton.getInverseSine
Get inverse sine

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0

## Newton.getInverseTangent
Get inverse tangent

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0

## Newton.getAbsoluteValue
Get absolute value

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: -1, result: 1

## Newton.getLogarithm
Get logarithm

| Field     | Type  | Description
|-----------|-------|----------
| expression| String| Url-encoded math expression on which you want to operate. Expression examlpe: 2&#124;8, result: 3

