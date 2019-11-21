'''
<li><a href="/marutisuzuki-cars/"><span class="brand-type-title">Maruti Suzuki</span></a></li>
                <li><a href="/hyundai-cars/"><span class="brand-type-title">Hyundai</span></a></li>
                <li><a href="/mahindra-cars/"><span class="brand-type-title">Mahindra</span></a></li>
                <li><a href="/tata-cars/"><span class="brand-type-title">Tata</span></a></li>
                <li><a href="/toyota-cars/"><span class="brand-type-title">Toyota</span></a></li>
                <li><a href="/renault-cars/"><span class="brand-type-title">Renault</span></a></li>
                <li><a href="/honda-cars/"><span class="brand-type-title">Honda</span></a></li>
                <li><a href="/mg-cars/"><span class="brand-type-title">MG</span></a></li>
                <li><a href="/ford-cars/"><span class="brand-type-title">Ford</span></a></li>
                <li><a href="/kia-cars/"><span class="brand-type-title">Kia</span></a></li>
                <li><a href="/volkswagen-cars/"><span class="brand-type-title">Volkswagen</span></a></li>
                <li><a href="/mercedesbenz-cars/"><span class="brand-type-title">Mercedes-Benz</span></a></li>
                <li><a href="/bmw-cars/"><span class="brand-type-title">BMW</span></a></li>
                <li><a href="/skoda-cars/"><span class="brand-type-title">Skoda</span></a></li>
                <li><a href="/audi-cars/"><span class="brand-type-title">Audi</span></a></li>
                <li><a href="/jeep-cars/"><span class="brand-type-title">Jeep</span></a></li>
                <li><a href="/datsun-cars/"><span class="brand-type-title">Datsun</span></a></li>
                <li><a href="/landrover-cars/"><span class="brand-type-title">Land Rover</span></a></li>
                <li><a href="/nissan-cars/"><span class="brand-type-title">Nissan</span></a></li>
                <li><a href="/jaguar-cars/"><span class="brand-type-title">Jaguar</span></a></li>
                <li><a href="/volvo-cars/"><span class="brand-type-title">Volvo</span></a></li>
                <li><a href="/porsche-cars/"><span class="brand-type-title">Porsche</span></a></li>
                <li><a href="/lexus-cars/"><span class="brand-type-title">Lexus</span></a></li>
                <li><a href="/fiat-cars/"><span class="brand-type-title">Fiat</span></a></li>
                <li><a href="/fiat-cars/"><span class="brand-type-title">Fiat</span></a></li>
                <li><a href="/lamborghini-cars/"><span class="brand-type-title">Lamborghini</span></a></li>
                <li><a href="/isuzu-cars/"><span class="brand-type-title">Isuzu</span></a></li>
                <li><a href="/mitsubishi-cars/"><span class="brand-type-title">Mitsubishi</span></a></li>
                <li><a href="/mini-cars/"><span class="brand-type-title">Mini</span></a></li>
                <li><a href="/forcemotors-cars/"><span class="brand-type-title">Force Motors</span></a></li>
                <li><a href="/bentley-cars/"><span class="brand-type-title">Bentley</span></a></li>
                <li><a href="/rollsroyce-cars/"><span class="brand-type-title">Rolls-Royce</span></a></li>
                <li><a href="/ferrari-cars/"><span class="brand-type-title">Ferrari</span></a></li>
                <li><a href="/maserati-cars/"><span class="brand-type-title">Maserati</span></a></li>
                <li><a href="/astonmartin-cars/"><span class="brand-type-title">Aston Martin</span></a></li>
                <li><a href="/bugatti-cars/"><span class="brand-type-title">Bugatti</span></a></li>
                <li><a href="/tesla-cars/"><span class="brand-type-title">Tesla</span></a></li>
                <li><a href="/citroen-cars/"><span class="brand-type-title">Citroen</span></a></li>
'''

import json
# fp = open("../json/final.json","r")
# data = json.load(fp.read); 
with open('../json/final.json', 'r') as f:
    data = json.load(f)
# print(list(data.keys()))
# for i in data.keys():
#     print("<li><a onclick='get_varient(this)'><span class='brand-type-title'>{0}</span></a></li>".format(i))
# for i in data.keys():
    # print("<option value='{0}'>{1}</option>".format(i, i.capitalize()))

wanted = data["dc"][]
]
s= """
<thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car1</th>
                    <th scope="col">Car2</th>
                    <th scope="col">Car3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{onroad}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">{fuel}</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">{}</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">{}</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">{}</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">{}</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">{}</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
            """
