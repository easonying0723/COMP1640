@extends ('layouts/sidebar')

@section('title', 'Profile')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Link css file -->
<link href="{{ URL::asset('css/profile.css') }}" rel="stylesheet">

<!-- Icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<!-- Bootstrap 5 -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
@section('profilecontent')
<!--<h2 class="title">Profile Setting</h2>-->
<div class="empty">
<form class="profileForm">
  <div class="profileContent">
    <!-- Trigger/Open The Modal -->
    <button type="button" id="changePassBtn" class="pswBtn" data-bs-toggle="modal" data-bs-target="#changePassword_modal">Change password <span class="iconify" data-icon="akar-icons:key"></span> </button>
    <p class="userid">UserID: UID001</p>
  </div>

  <div class="profile-pic">
    <label class="-label" for="file">
      <span class="glyphicon glyphicon-camera"></span>
      <span>Change Image</span>
    </label>
    <input id="file" type="file" onchange="loadFile(event)"/>
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGRgaGhwaHBkaGhgcHhocGhoaHBohHBocIS4lHB4rIRgaJjgmKy8xNTU1GiQ7QDs0Py40NTQBDAwMEA8QGBISGjEhISE0MTQ0NDQ0NDQxNDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0NDQ0MTQ0MTQ0NDQ4NDE0MTE0NP/AABEIANwA5QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAIFBgEAB//EADoQAAEDAgMGBAUDAwQCAwAAAAEAAhEDIQQSMQVBUWFx8IGRobEGIjLB0RPh8UJSYgcUI3KSwhWCov/EABoBAQEBAQEBAQAAAAAAAAAAAAABAgMFBAb/xAAsEQEBAAIBAwIFAQkAAAAAAAAAAQIRAxIhMQRBEzJRUpGhFBUiIzNCYXGB/9oADAMBAAIRAxEAPwDTTdHJS7z8xRty5NJNciNrgJRzlxjZKqLGnjAd6p9pD/ldzg+ic/2x1CQxs5xPBNgtMqbDdBpFEBUVa4Z6dmypWVCE9QrytbRMOS+1LsZ/3Hs5Tm6jj/oH/YfdCAUHXTD336aJKgbpsLK0HEYoMALhYkAugWJsJGq483UMcBkJLQ7KQ6DbQ+65TeGDM+SAJOaJg9N4lWXVBWm6nmXsjXDMx2YcN6FJXXbIhchudZechl2iVHWPgkeKFicS1jcz3BreJsqbbW32UTlbD3xETZvWN/JZDFYqpWdme4knTgOgGiz16mmpjtq8T8T0YIZLiQRpAvbf3dZTGUg3KWRxzXt1PHol61K3A9ET9SaOs/PxHDlrqs9VtXp0DtWk2o+m+mcjnQHxpJsXADfyWy2B8MU2/Wx78zAf+RrzmMmZyyANNVR/CGzjVr5zdtP5vHcvqWz6Azg2JDBIJE7/APG3oum9OdfLvi74SYyoKjIpsqPA/TaJAO/KZ+mxKtMHRDWgBPf6j1T+pQYJAGZ5EzewH3VdhK1k3tZNGIXlNcUVf4kw5Fpvsp4vCydd6iaeULnVcKp/iXGClTDgS1xNi08OI3/ZWgKyP+oBMUuBz+fy/lRVaPjLFNsHkjiWtPuPumKPxdUeR+o1riBqBE85Ej0WYY917nz7sjsY46z0t6/um10+gbP2zSfacruDreTtFaL5fTZwN+Uq32dt+pRhr5czgZt0OoULH0BgRGOIKzbfipgaHBsiQCZ0H5S9f4xaYDGweP4RNNmKgm/FSxXzMgXu33WH2fthz3iTO/vvetZhsb5QDPqp1L0mMNhHG+nVOswmUElw1n0AVYdo5RqYvPh/KQxO0y62aIn0up1L0rzEYYFpbmbff48EGtggWObnFwR0t7LNVNoOykyeyPx6rtPbJP1X7+906rV0u8HhBSaWtMmZnlySOLxRYS7UTEeMIdHaM34zHqY+y7VOcGd8eBgflSXRZtW4r4pDbBve9VGP+IqrgWtOWeFrdVHaWzCHAtG4EeJMk9IS1DBCZd/J5fldOq1npL4fCEnM7XnKO4NH9PqPYJ79EAagdSRCBiRGrZA3iZHUkLLcV2Md8hIeC3hGh+3VO/D2xzXp/M4NZncSf6jDWiGz4qsxbbEttOoMA+PHqtr8O0/08MwFvzZZMyLuOaJOtiF0xm6xndRe7L2LTawNY2RpLgCY37x3xV5s/AMZ9LGzEN3QPUHwVFRxDs1nfNENAibamy0FPFkjK9skD6xYj8rpXKMt8T7DOJrhxqNYGNyxBcZknkAFnNqYH/bvDA8PBAIcBE8ZG4har4sqtpsNXNEiDYmSPp6E8+BXzh+0KlV0uJMCw4Bct3d34dunHpmvK7p4my8q5tSAN68sfHxa+Dk+nY8kEpSmZTuIrtduPiEq0N4wtuQZZdZv/UDCE0GP1yVL9HiPcN81pn9R5hL7Xwv62HqUpGZ7CGz/AHC7fUBRXybL8sr1KvA8IC7QJALXCHAkEbwRYg85CA14Bnh6Hd+UaXNCwyzB3ka+Y0HuetymhIsCbxca+Ok8roezaYcRNh9RvcgadJInoByi0ewFpc4NgSL2AG6BN++igoXgsJg99Ek5gc+R8pnQSQYvpqNd3krTFURqBHDdPhcpvZmBI+cibSYicu/rGqbRPZeGcL7xBjj0O+43blq6dSGAjQgBV2Gp5WkiCRw38ehlzTzUqleG2Npjpayze6x3F402HfZCRa8kzyPpf2PslcTX5j7EHTohtxBbpcbp5Dimmj+JqfKQDvP57Cr2VtNx/FkdldpbPGB46eG5V9Z0PHCSPwqi5bVytHnHlCYwuPLSJMzcjjKpq9Y5LG4Men7JvCMkNdqBHjpZSxWqbQDhyn01393VZVwOlrAD1v7K4wRsPDuPVGe0EcZ05929VIVmH4Z8E5WwOTvuVUvxUGMhbuNjkPUSFua+Fkcrx+Vhtu1HB5AiN5Eyf2WkhZlJlSoPlyhvzOA0gbgDuOmseS1GFx7YAF5Ohm/SLlA+E9g061F4e8sqPMsP9oAIAI3zqbzom6Oxa9Kt+m2mXvgHO2C3IbE57ZJIIg3svp45j0uHJvbRbKpNAJMZjBcRHgBGg5K4aWgzG7f7ygbL2OWD5hc8TKjtLY/61qmIe1n9lOGgj/J5ku9FjLL3kWYe22a+Ndq4eqwUWFzyCC7IYbI3F+hHRYao0huRjQJIECXE39V9PZsvZ1LVrXkf3Oc//wDMx6Iw2/h6YilSj/qxrB9vZfFycmH9+cn+J3fXhjZ8uNr51S2HinCW0KxHHK4e8Ly3tX4pqE/QB1JPtC6vm+N6b7r+Hbo5vpPybr4cASPdVzXAmFaVBYqhbiQHkG116b4DVYQJUWEFGIlqVaorD/Huy/06orsHyVLP5PA9Mwv1BWVrMn5h4j7r6h8UjNhyC2R4WjfO5fL6kTG8KrKvtkVWspGo4G5DQN51dv0uDf8Aw6KZx4JBeQXSTlFwyw38fW8Kkq1zkDToDuT2ycI17RDhINheQfGxUVoMGwvMyb3AkdYIMg9R9rWtBmS7dJBgAAFrt8DeDw3JHDNMQBDm7soE8wBqOdj9rJmJsZbrqDA5mDxnfYrNQOq9oOZtgRod43X46Dw6IDqeadLgeJG70sULEVtcvCYmfOO7pPD44A5XGO+CKBj8MQSQCNZG/n4/cJbBOzNM8/29j5q7xjmvYYiY1CzeDfDiJi/n3CGxWOyuLTz9uyg4txFuh9f5U8U/5p6DwuEriTMEG8Efx6IbNCrmZ4+WqtMBXLQDwEx5AKjD7EDfb3/ZWGHrfLHIft9kJWpo4okTOsa6QFNm1jmho6m1pnzKo8K85dbd3vuTFCs1vyh7ddAQfUb0XbU0sXmb14jjuuOSqdt7NDm5gQLW3xzJ1MbufPTmHqHWRHD+FYUsTNrHmdPVZt0ulBh2llNhFi3LPMc1rMDtB1Gk94+ZznNEnX+oCTqQL+aVq4Vr2mBBKhiBFCP8x/7LHLnljx53HzprDGZZSV2ttuu7+uP+oA9TJSVWs531Oc7qSUMLy/PZc3Jl82Vv/Xp48eM8TTy6uLoXNtILi5K8mxt3sEFZDHtmpYWWwxTgGnkFmMdUc4QIbzAv6r9Zbp4UcwuKj5Tp7Kb3XKparHt1JI49hHwuJLhB+oeqm2jG2m5qDh918qx+GIdMkH3H5X1PH0nPYRvF1gtp4YTc274qyipDD1twKvPh3Cvb84+k6ggkR1HBc2XgWAAk5hu4/wALVYaoMoiJ5wfUGVLRJuIGmotYQ4WuIJMjySuJxAGhI84TdbGQLBhHA/aSqzFVAd1+UfhRdAPxQ6+B/CBXrtAl5a0cXGOtp56pTFYx4BDGRqSc3AToIG7es7tGk8O+e79Y4fhWTaVom4xlyyoDyBEe6Ur1IcTxvbj4qjo0aZD87spDCWw0uzOkZWyPpkEnMeHNEwmII+V5lugPCdOoWulVm/ETvt7dn3QzU3d3UK1LLp3zS0njaeqkiHGP38+/urPZ13eGvfJVYYfO8eG63CPNW+ymZ/kmM/yzwLrDw0Sw2qtp7SfUcWscW0xYAWLuZOt+CJhNlk1XUmvYXtMBzHhzXWn5XD6glNpYN9J7mPBBB0hWXwzQc1/65symC5zjutAjmdw3rUnfRb23F3gKjmgSeI6EWI6yCn6eMcSOA6JPDNLKOZ8h73ueW6EBxJuDpx8UF9aTY7+frC5WNba7BYrN7az6aJys3Mwgbr2WdwFc63nr9lo8I+QPyuWeO5cb7t43VlimeFBOY+llcdUmV4HNh0ZWPTwy6pt0KGIrBjS8gugta1oMZnvcGsbO6SdeAKkkduViygHNy5hWpkZ3BrQQKhu4kQLarfpOOZ8uOOXhObK44WxzE7XrUCBUwtOoHjM39I1BlgkEOJd8xkawN68rf4XY9z6/6j2VHsLGSwWDQHOAPOXu0leXu3i4pfkn4edMs/uW+KxZeb6bh+Uq496qVOjUDmk03RIsWn1WsrVBTgANkiwawx4kCy6ybcbdMpTwr3aMcf8A6lRHw7VJzNYWnqAD1ErXOrOuIJIAuCACd+u5Dzu/tm+rnRA6DXd5rWk2yuLw7mHI5t4vBkXWGxuGZ+uWnUX1AX1baWzg9wcCR8sERJJXzLatPJWfOuaLwLdIWSAOqXjha4C6+oRp36WUJEW+34Sb6m4D1sjcGqYrMdZPn+wUqXO2+BH4SH68H5fS3tqpMqkXnzhEXxY17CwtIzDUCSfDVVG38A6rDoBqAQ8QQTH9TeIIg8pgrtPExYH3PqnqW0H6OAcP82m0cI3rWOWks2xVPZz3PDA03MJzbGzTTeWAX+Ukj+nuy2L9rMB+iTFyHvH3SGO2jmYWtphmbU7z4m/rwWuqeyd/dnsNXlsO1GvlwUW1GCbT33dRqUSPHWd6WrGDfU9/dWFOUMQ7eJ9wmW4omRyPX+dEkxhyz9wmGiNYISxIvsNtgPZlxHzkaOc1pcB1jN5kpk7RYYAbIbdoOXK08cjQBPAmSqOnRn6Tr7nh6JmmzjbrGqxbfq1JBq5c4lziXE3Jn3lSwzf5F5XCzfu4nVNU2ni3vr1WVWWzRe+kK92cCDyO5VWzWHXQq5w7b6RzWMvLae16f0nlG9VDgr3abfkEEefcqicF4/rcdZbffwX+GOJDbYllNsTmrX+RrwAKb7lriBAzTdPhVXxIwuZRaGVHzUeS2mYcYYzfBgSRuWfQT+fD1P8ATq4+GmE18T/yGoAKYDpbch1YO+WmAG3tBvZeS3wUCwV3OYaZc9ts+cyGAmXbz80+K6vay5JLe74sZ28PqrzNyvZWRMIDLlGe2y6bfOEcv9q4ei8SvZggVxL4BPDovku1cRmqOIBJLj78F9U2rWhjuh4r5ViwcxifHQeAUq4kn1zEGOm/ySVV5O8RwEp6vR/gfhJVaRbvHqUbBJJ1Hv7qTXAfaNf38kIs8TxOg815si0Sd518FUOAxcWB538IUwCRNusifTrql6W/5XHmZA9NfBEe/wDuc0cpaPISiJNZJsW236+UW8lNrRPEcOPiB1XmAQIdmJ4B5noC0D1Kcp4FwgkgDfMA6WGpi/CUFZjcNOnDhoqbH4CoDmaARHQjiPRa6q1rbGHEXhrSBw3cBayr61M7hHkPPv8AC3KmmSp1HDMHCCBIkcFZYCg4uD5taBu09Si7VpS3MSJEjwPuAmNkuEBtzvHjchLSRebKoE6bo4eEyVcf/E523EOPE66yltnUmkCWu4z048dfdWzBTZ82Z0bwQY8Y3lc7WoqP9i9huxxG6DmHpcLz8OAZykci14HmVdxRP0uJ4hrp9XT7LxawG5LOk+4P/qs7aLYB8QO79FocMywy9+B1SFLD5vpeXDqT5/wrrA0tLjwjv0WfK1XbWeJyyIHJU7yrParjnI0voqsk8143q8t5WV9/DNYx0IeJwlOqzJUaXNBJBa8scJADhMGWkASI3BTXgV8uHJlherG6rrljMpqpUKTWNDGAMY36W333JJ3knUry8vKZcmeV3aTDGPpVIIryhUzCm56/VPFCqBLucmHvSGMeANYWRSfEOJtAM+GixmMZvny181b7Ur5nH8yq144696lGorHNtuHv1ul30ATrblv/ACesJyo0TvPIfsuZLSQG9fxvHgjSpfQJswG+7U+KRrYe9y1oHEyfENBI8QrvKCLucQdzRE8hPtCVNAEgNYOAmXEnp9JPgiq1jGTAzvPBrQ31OYx4BMsDycrAxh3NYM77b5JOQ85aQiVqYFnuJ/wYQB4x8recDxQhio+UANZva0QD13vPN08o1TaaWuCouaCZiRdx+Zzjf+q/3HMKb3sbZznOne4z6DTpfql6Ndz7D5QfMfgXF9biNV1j2N+gZjeXu5akchp10k3Q0ZMlpDG5YtJt1HGUjiHgG14ET7+KIa5iSddAOFvz6FLU2lzpP0iZ59/dDRbEtLiIHncHhZcw2Hc24G/34J09+Nvb2TeFoy3xv4b++KbTRjZ2Nc24cR373HqrzD415cAGgzoR336KuZs+NOXsVpdj4AgSQs2tCM2dnMlrWk65YB8hY35AqZ2QBp7T6FXTKVpXXCFlNq/D4QN19ArXBU51QWt4KxwrIHNaxndMqzO3aGR9jM7jPpuVG4jeI6fgrSfErCSDB9f4VFSwb36MPU2HiSvJ9Vx5Xksxx29DhzkwltL5V6E+3BMFn1Gz/awF7vRGbTYPppl3Oo63/iFzw9By5edT/bWXqMJ47qvKvK7/AFHf3BvJrQB6yvLt+7p936Of7Vfo1AqKLqhKDmXg5es89Jz1VbVxMMPTgrJzlmviGraO/wB0FDUfJJJS1R/Lv7IjylnlFBqcdBysliSbft4dUd5XGgT78h37ooTBefXh05wunSG216nx1Tb6Yy7recngu1KQAA6W74orO4ll4Q2UIOknhw715dVdOwZ4LzMCQJjT3/bXrHBRdkHDKC2Txe7eBuaODjMcgebiQ1HHTTSQNBH0tHIepJnirP8A2JsCJvJ5mJ9vc8VBmDM+M6KW1SwAm+4QPYn380eQYEWHqe5R2bPdwTtLZhjRTYr20wbRvnvzCudmYM6Ad7insFsgDXvuFdYOiG9QiWwPC7NAg+n4VrRaBooteEUK6ZFa/cuOO5RaEalRmE0O0GX0VjSEIdKkAmBGi1IzarNtg5MwgEb4mPDis49hd9bnO6kx/wCIstJtzEBlJ73fSBJIWSw+1aTz8pk87e91nLbeJprI0EdLKQbxsow7kFxtMb5JWNt6TJbxXlLJyXlFXbXruZIMxIRRWXXbhYJWfayyG16svOq0eOrQ0+0rH4h8uJVJAXmyXcjEoLyigOCiSiOcuRKCGckjyHfFMZ5y8AfPuENlA+KKKRHgim2G2mgvzMgft4JikwHvx/fxCWbTdG/r5JvDA7+B9L99EE2YcQbJhmCA3dyp06ZkcDHfn7J1jSZ5T5CY9VDYDMG2/BF/REQmabDEx32U2xgAgj+JTSFWYUnS/wDKYp4Qx0T+HYAB0U2WcQd9/NNJtXspcDpqOCOykU4KQDpA115o7QFdGyraKabThEbT4In6cJo24GblJrOJXsy602VQntYD9J9pGU8eHK6+KvdlcSBl1+m32lfbMb9Do/tPLcvjOPMPd8hmTcG2vSEqxPBbffTIE5m8O7rabNxzazMzfEaQegXzcmTpHgntmbRfSeCzxHELNxblfR8nh5D3XkCg7O0Og3HBcWGmew+3Wm0/ZWNLagO9YitRIJspYZ7wbE9DotaZ022JxWZqpKhRaTjlugvKsZQhCeETMp0W3VChpFP4XZpc3MCPPzUq7gQGtuUOhVLOP5QEqYVw1CPh8IXCZAAMx3qUwMWHAT7R5eUoWcD5h/PBA5Sw2kG+8c0b/bneBv06qeFaHtaZA1PkBv8AHuE4zDNLTe/4TQXoUcxbe0e8/lOULRzv33vUKeDPHdHopMwzgRv3dUNmKbYMHl7Jx2FDgb3gpNrHT5FMYZrzp2USiUCNDqmqtMQDv0SNaiQQ/grGiW5ecKwrjHbiiNCE/UGEViCcxou5iutPALjhCCbGzquveoCpZRJlBx9wZXxb4lYG13tGmYwYEeh18F9nraHsr5Vt3Yz31HkjeYJgnXiDPmFCMqxyPSGZwAJnhCs8N8MVJu8Aeau8BsVjCHGXO4nRS5Rpb7OYGU2tJuBvJn9l5FDjut4Lyw0zWMw5BMtkcRdJMotm3kR+U/tVxD7JbDknVdGDMQEu9GeUByCDyuF9lx7kOmZN7BBKkHOdAP4CfOEtLj0H3KCwcNPcqD2mYmfygscJg2xJdcx5W9NOsqxdg25fkB6n7DvRVWBrhmok8fUnvirWhtiI+XTd7BAShRItEajyMfdNMYAJBvf0STMS5xvb+ZTNJgc+CbAX53ugYp1NGnTsj0TdHMbTv/H4KAyqwQHdfWEdgaTYwN3iB9igZY068/49kWi8gwgjDuizp7t7KTaLib80TRl9RsQTY/uhYZ4iF19AZXNO8Ko2NijlAdfuE33NNHOYLrWAaoDaym58oaMh4C8HhLspk6BHZQgIacc0E2XHBwRgAEN70CmJfDTKzT2En+PstFin/KVRvbyngplVhT9Pv+EVjOXfVTae4RCzn5/hYaBLBy915Hy8Z9F5BlNuUznSeHVjtoglV1ErpWRnFBeURxQnIA1EJrroj0IGD3bmgOCU7hXNdr3wVfPfsmsNBsetvugtKNBpOsnf0T2Dwjc1xe5A9lVYTMJcBrx+6foVHzO/j6z3yQOfpAG41t7fc+iNQwxdJB5+BkBQqVAQBw785KWp41zXuA5d+SBp2BMmTcfumaGDNr7vx34ITMWCCT5+ML1Os4m2l/C5QWbWOE319O/uj53b+M+qSpVybHenKbpCAtVuZjuTT7Kk2ZTMSOJWhY2WkcQVn9mYgNquYdCZHfVKkXdJnBNUqaAx4P0m662t5op/TRQNZBFZQEuNkQR1ZQJ36r0ZdUN796KTx790x5wq5/OEbHVTzSQk6ecH3WasgwNuPoPsvGoOXfRCFPifc+yL+mB2B+6y0iHzuPgYXkQQNB5BeQZDav1JSmVY7aYM3iqnOV0rA5UXFdKiVAGogO1RnoD1VgzDKk2pFh48+nAfkoNPRd3jy8EFthsUBqRA15wNB3v8rTC4pro+/mfY+izOHvE96Kyo2NuH7/t0RGjzNy3iSM3n9Pol2sbMjsX+wPmFVVa7srr6ujwuvNrujXvMB7AJsaAsEAcftb8I1KoB0knwm33VOzEO47gnJkCeCC5wsGTv7hP0WfL4fwqPBPOU9D9loML9IViUekz5T3uWP2rRLKocLG91smH7+ypNv0xE75TKbhCeDxRsd29Wb3yMypMH9SuaffksxTDHDVHFfL+yVaI071XXKidSpPXkoVH2XKeqHidCgTrPv3I8UHJP7rpN+HRecwa6nmsVqPQN58r+yk0Dc2OZKXpVCd/kjVqYG6dNbqK6X8wOgBXlFrAvIj//2Q==" id="profilePic" width="200" />
  </div>
  
  <div class="row">
    <p id="profileName" class="name">SCPG1700562</p>
  </div>

  <div class="small-middle-container">
  <div class="row">
    <div class="col">
    <label for="uname" class="leftsection"><b>First Name:</b></label><br>
    <input readonly type="text" name="fname" >
    </div>
    <div class="col">
      <label for="lname" class="rightsection"><b>Last Name:</b></label><br>
      <input readonly type="text" name="lname"></td>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="email" class="leftsection"><b>Email:</b></label><br>
      <input  readonly type="text" name="email" >
    </div>
    <div class="col">
    <label for="contact" class="rightsection"><b>Contact:</b></label><br>
      <input readonly type="text" name="contact" class="rightsection">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="department" class="leftsection"><b>Department:</b></label><br>
    <input readonly type="text" name="department" class="leftsection" style="background-color: #E6E6E5">
    </div>
    <div class="col">
    <label for="position" class="rightsection"><b>Position:</b></label><br>
    <input readonly type="text" name="position" class ="rightsection" style="background-color: #E6E6E5">
    </div>
  </div>
</div>

<!-- No need for user to update their details so close it-->
<!--<div class="updateProfile">
  <button type="submit" class="submitProfile">Update</button>
</div>-->
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="changePassword_modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color: #F4F6FB;">
      <div class="modal-header modalHeader">
        <h5 class="modal-title" id="modalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modalBody">
        <form>
          <div class="mb-3">
            <label for="InputPassword1" class="col-form-label">Current Password : </label>
            <input type="password" class="form-control" id="InputPassword1">
          </div>
          <div class="mb-3">
            <label for="InputPassword1" class="col-form-label">New Password : </label>
            <input type="password" class="form-control" id="InputPassword1">
          </div>
          <div class="mb-3">
            <label for="InputPassword1" class="col-form-label">Confirm New-Password : </label>
            <input type="password" class="form-control" id="InputPassword1">
          </div>
        </form>
      </div>
      <div class="modal-footer modalFooter">
        <button type="button" class="cancelPasswordBtn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="submitPasswordBtn">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
var loadFile = function (event) {
var image = document.getElementById("profilePic");
image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection
</body>
</html>
