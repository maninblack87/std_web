import requests

url = 'http://apis.data.go.kr/1192000/select0040List/getselect0040List'
params = {
        'serviceKey' : 'aKvmHpFI2+TNf3LepeF8Whu34R7222pR/vJ43DIO4w75ZJ/T3xlde342akR7IENdds1rFokGa5yW4VzjMJcO0w==',
        'numOfRows' : '10', 
        'pageNo' : '1', 
        'type' : 'json', 
        'baseDt' : '20210101', 
        'mxtrNm' : '옹진', 
        'csmtmktNm' : '', 
        'mprcStdCode' : '', 
        'mprcStdCodeNm' : '굴'
    }

response = requests.get(url, params=params)
print(response.content)