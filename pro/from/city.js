
var colleges=['台北市','新北市','桃園市','新竹市','新竹縣','竹北市','苗栗縣','台中市','南投縣','彰化縣','雲林縣','嘉義市','嘉義縣','台南市','高雄市','屏東縣','台東縣','花蓮縣','宜蘭縣','金門縣','澎湖縣','馬祖'];
var collegeSelect=document.getElementById("college-list");
var inner="";
for(var i=0;i<colleges.length;i++){
    inner=inner+'<option value=i>'+colleges[i]+'</option>';
}
collegeSelect.innerHTML=inner;


var sectors=new Array();
sectors[0]=['中山區','中正區','信義區','士林區','大同區','大安區','內湖區','文山區','北投區','松山區','南港區','萬華區'];
sectors[1]=['石門區','三芝區','淡水區','八里區','萬里區','金山區','蘆洲區','三重區','泰山區','新莊區','板橋區','樹林區','鶯歌區','三峽區','林口區','中和區','永和區','五股區','汐止區','土城區','貢寮區','雙溪區','瑞芳區','坪林區','深坑區','平溪區','石碇區','烏來區','新店區'];	
sectors[2]=['桃園市','八德區','楊梅區','龍潭區','復興區','大溪區','平鎮區','中壢區','觀音區','大園區','蘆竹區','龜山區','新屋區'];	
sectors[3]=['東區','北區','香山區3區'];
sectors[4]=['新豐鄉','竹北市','竹東鎮','寶山鄉','峨眉鄉','北埔鄉','五峰鄉','橫山鄉','芎林鄉','湖口鄉','新埔鄉','關西鎮','尖石鄉']
sectors[5]=['竹南鎮','後龍鎮','苗栗市','西湖鄉','通霄鎮','苑裡鎮','三義鄉','銅鑼鄉','公館鄉','頭屋鄉','造橋鄉','頭份鎮','三灣鄉','獅潭鄉','大湖鄉','卓蘭鎮','泰安鄉','南庄鄉'];
sectors[6]=['龍井區','沙鹿區','清水區','梧棲區','外埔區','大肚區','大甲區','大安區','烏日區','太平區','新社區','大里區','霧峰區','石岡區','豐原區','潭子區','大雅區','后里區','神岡區','和平區','東勢區'];
sectors[7]=['南投市','草屯鎮','名間鄉','竹山鎮','鹿谷鄉','集集鎮','中寮鄉','國姓鄉','埔里鎮','魚池鄉','水里鄉','信義鄉','仁愛鄉'];
sectors[8]=['彰化市','秀水鄉','竹塘鄉','鹿港鎮','福興鄉','芳苑鄉','大城鄉','線西鄉','和美鎮','伸港鄉','二林鄉','埔鹽鄉','溪湖鎮','溪州鄉','北斗鎮','田尾鄉','埤頭鄉','二水鄉','大村鄉','永靖鄉','田中鎮','社頭鄉','芬園鄉','花壇鄉','員林市','埔心鄉'];
sectors[9]=['北港鎮','虎尾鎮','水林鄉','口湖鄉','四湖鄉','元長鄉','麥寮鄉','東勢鄉','崙背鄉','台西鄉','土庫鎮','大埤鄉','莿桐鄉','褒忠鄉','二崙鄉','西螺鎮','斗南鎮','斗六市','林內鄉','古坑鄉'];
sectors[10]=['東','西'];
sectors[11]=['東石鄉','朴子市','民雄鄉','鹿草鄉','布袋鎮','水上鄉','六腳鄉','新港鄉','太保市','溪口鄉','大林鎮','竹崎鄉','番路鄉','大埔鄉','阿里山鄉','梅山鄉','義竹鄉','中埔鄉'];
sectors[12]=['新營區','歸仁區','關廟區','新市區','安定區','仁德區','永康區','將軍區','善化區','西港區','玉井區','山上區','新化區','龍崎區','楠西區','學甲區','下營區','北門區','七股區','柳營區','官田區','六甲區','東山區','大內區','佳里區','左鎮區','南化區','白河區','麻豆區','後壁區','鹽水區'];
sectors[13]=['鹽埕區','旗津區','左營區','楠梓區','前鎮區','三民區','新興區','前金區','苓雅區','鼓山區','小港區','內門區','茄萣區','路竹區','湖內區	','阿蓮區 ','田寮區','橋頭區','岡山區','梓官區	','彌陀區 ','燕巢區','大社區','仁武區','鳥松區	','鳳山區 ','林園區','大寮區','大樹區','旗山區	','永安區 ','美濃區','杉林區','甲仙區','桃源區	','六龜區','茂林區','那瑪夏區'];
sectors[14]=['屏東市','牡丹鄉','枋山鄉','獅子鄉','車城鄉','恒春鎮','林邊鄉','佳冬鄉','新園鄉','崁頂鄉','南州鄉','枋寮鄉','滿州鄉','麟洛鄉','竹田鄉','內埔鄉','九如鄉','長治鄉','鹽埔鄉','萬巒鄉','潮州鄉','萬丹鄉','新埤鄉','泰武鄉','來義鄉','春日鄉','霧台鄉','里港鄉','瑪家鄉','三地門鄉','東港鎮','琉球鄉','高樹鄉'];
sectors[15]=['台東市','海端鄉','延平鄉','卑南鄉','金峰鄉','達仁鄉','大武鄉','太麻里鄉','鹿野鄉','關山鎮','池上鄉','東河鄉','成功鎮','長濱鄉','綠島鄉','蘭嶼鄉',];
sectors[16]=['花蓮市','秀林鄉','萬榮鄉','卓溪鄉','富里鄉','玉里鎮','瑞穗鄉','豐濱鄉','光復鄉','鳳林鄉','壽豐鄉','吉安鄉','新城鄉'];
sectors[17]=['宜蘭市','員山鄉','礁溪鄉','大同鄉','南澳鄉','蘇澳鎮','冬山鄉','三星鄉','羅東鎮','五結鄉','頭城鎮','壯圍鄉'];
sectors[18]=['烈嶼鄉','金城鎮','金寧鄉','金湖鎮','金沙鎮','烏坵鄉'];
sectors[19]=['馬公市','白沙鄉','湖西鄉','西嶼鄉','望安鄉','七美鄉'];
sectors[20]=['南竿鄉','北竿鄉','莒光鄉','東引鄉'];
function changeCollege(index){
    var Sinner="";
    for(var i=0;i<sectors[index].length;i++){
        Sinner=Sinner+'<option value=i>'+sectors[index][i]+'</option>';
    }
    var sectorSelect=document.getElementById("sector-list");
    sectorSelect.innerHTML=Sinner;
}
changeCollege(document.getElementById("college-list").selectedIndex);
