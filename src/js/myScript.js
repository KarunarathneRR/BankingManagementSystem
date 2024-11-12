function loadData(name) {
if (name=="btn1"){
    document.getElementById("para").innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad).[1][2][3][4] Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.[5][6][7][8] Like the MessagePad, the iPhone is nearly all screen. Its form factor is credited to Apple Chief Design Officer, Jonathan Ive.[3][9] The iPhone beta however was created in 2004 to test its ability towards commands of the Apple team and was called the first iPhone ever but was never released to the public so it was not considered as the main first iPhone"
    document.getElementById("image1").src ="images/iphone.jpeg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = "Nokia Corporation is a Finnish multinational telecommunications, information technology, and consumer electronics company, founded in 1865. Nokia headquarters are in Espoo, in the greater Helsinki metropolitan area.[1] In 2018, Nokia employed approximately 103,000 people across over 100 countries, did business in more than 130 countries, and reported annual revenues of around Ä23 billion.[2] Nokia is a public limited company listed on the Helsinki Stock Exchange and New York Stock Exchange.[3] It is the world 415th-largest company measured by 2016 revenues according to the Fortune Global 500, having peaked at 85th place in 2009.[4] It is a component of the Euro Stoxx 50 stock market index.";
    document.getElementById("image1").src ="images/nokia.jpeg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = "Samsung was founded as a grocery trading store on March 1, 1938, by Lee Byung-Chull. He started his business in Taegu, Korea, trading noodles and other goods produced in and around the city and exporting them to China and its provinces. After the Korean War, Lee expanded his business into textiles and opened the largest woolen mill in Korea. He focused heavily on industrialization with the goal of helping his country redevelop itself after the war. During that period his business benefited from the new protectionist policies adopted by the Korean government, whose aim was to help large domestic conglomerates (chaebol) by shielding them from competition and providing them easy financing";
    document.getElementById("image1").src="images/samsung.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = "Guangdong OPPO Mobile Telecommunications Corp., Ltd, commonly referred to as Oppo, is a Chinese consumer electronics and mobile communications company headquartered in Dongguan, Guangdong, in China, and known for its smartphones, Blu-ray players and other electronic devices that are made in China. A leading manufacturer of smartphones,[1] Oppo was the top smartphone brand in China in 2016 and was ranked No. 8 worldwide.Korean boy band 2PM prepared a song known as in a promotional deal with Oppo for launching its brand in Thailand in 2010.[6] In June 2015, the company signed an agreement with FC Barcelona to sponsor the Spanish football club";
    document.getElementById("image1").src="images/oppo.jpg";
}
else{
      alert("Invalid!!!");
  }

}

function priceForLoop(){
    var phone = ["IPhone XS = Rs 10000/=","Apple iPhone XR = Rs 5000/=","iPhone 8 = Rs 15000/=","IPhone X = Rs 25000/=","Nova 5 = Rs 10000/=","Nova 5 Pro = Rs 8000/=","P 30 lite = Rs 89000/=","Z 5 Pro = Rs 90000/=","K9 = Rs 18000/=","K8 Plus = Rs 10000/=","3.1 Plus = Rs 36000/="];
    
    for (i = 0, len = phone.length, list="List of Average Prices (using For Loop) <br/>"; i < len; i++) {
            list += phone[i] + "<br />";
    }
    document.getElementById("image1").src="images/list.jpg";
    document.getElementById("para").innerHTML = list;
}

function priceForInLoop(){
    var phone = [];
    phone["IPhone XS"] = "Rs 1000/=";
    phone["Apple iPhone XR"] = "Rs 500/=";
    phone["iPhone 8"] = "Rs 1500/=";
    phone["IPhone X"] = "Rs 2500/=";
    phone["Nova 5"] = "Rs 100/=";
    phone["Nova 5 Pro"] = "Rs 800/=";
    phone["P 30 lite"] = "Rs 8000/=";
    phone["Z 5 Pro"] = "Rs 9000/=";
    phone["K9"] = "Rs 1800/=";
    phone["K8 Plus"] = "Rs 100/=";
    phone["3.1 Plus"] = "Rs 360/=";
        
    var list="List of Average Prices (using For In Loop)<br/>";
    for(var item in phone) {
        list += item + " : " + phone[item] + "<br />";
    }
    document.getElementById("image1").src="images/list.jpg";
    document.getElementById("para").innerHTML = list;
}

function priceHigher(){
    var phone = [];
    phone["IPhone XS"] = 1000;
    phone["Apple iPhone XR"] = 500;
    phone["iPhone 8"] = 1500;
    phone["IPhone X"] = 2500;
    phone["Nova 5"] = 100;
    phone["Nova 5 Pro"] = 800;
    phone["P 30 lite"] = 8000;
    phone["Z 5 Pro"] = 9000;
    phone["K9"] = 1800;
    phone["K8 Plus"] = 100;
    phone["3.1 Plus"] = 360;
    
    var HighPrice = "List of high cost mobile phones <br/>";
    for(var item in phone) {
        if(phone[item] >1000){
            HighPrice += item + " : " + phone[item] + "<br />";
    }
    }
    document.getElementById("image1").src="images/list.jpg";
    document.getElementById("para").innerHTML = HighPrice;
}

function priceLower(){
    var phone = [];
    phone["IPhone XS"] = 1000;
    phone["Apple iPhone XR"] = 500;
    phone["iPhone 8"] = 1500;
    phone["IPhone X"] = 2500;
    phone["Nova 5"] = 100;
    phone["Nova 5 Pro"] = 800;
    phone["P 30 lite"] = 8000;
    phone["Z 5 Pro"] = 9000;
    phone["K9"] = 1800;
    phone["K8 Plus"] = 100;
    phone["3.1 Plus"] = 360;
    
    var LowPrice = "List of high cost mobile phones <br/>";
    for(var item in phone) {
        if(phone[item] <1000){
            LowPrice += item + " : " + phone[item] + "<br />";
    }
    }
    document.getElementById("image1").src="images/list.jpg";
    document.getElementById("para").innerHTML = LowPrice;
}

function checkPassword(){
    if(document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value)
    {
        alert("Password Mismatched!");
        return false;
    }
    else{
        alert("Success");
        return true;
    }
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
        document.getElementById("submitBtn").disabled=false;
    }
    else{
        document.getElementById("submitBtn").disabled=true;
    }
    
}
