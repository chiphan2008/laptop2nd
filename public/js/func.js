function str_slug(title)
{
  var slug;
  slug = title.toLowerCase();
  slug = slug.replace(/Ă¡|Ă |áº£|áº¡|Ă£|Äƒ|áº¯|áº±|áº³|áºµ|áº·|Ă¢|áº¥|áº§|áº©|áº«|áº­/gi, 'a');
  slug = slug.replace(/Ă©|Ă¨|áº»|áº½|áº¹|Ăª|áº¿|á»|á»ƒ|á»…|á»‡/gi, 'e');
  slug = slug.replace(/i|Ă­|Ă¬|á»‰|Ä©|á»‹/gi, 'i');
  slug = slug.replace(/Ă³|Ă²|á»|Ăµ|á»|Ă´|á»‘|á»“|á»•|á»—|á»™|Æ¡|á»›|á»|á»Ÿ|á»¡|á»£/gi, 'o');
  slug = slug.replace(/Ăº|Ă¹|á»§|Å©|á»¥|Æ°|á»©|á»«|á»­|á»¯|á»±/gi, 'u');
  slug = slug.replace(/Ă½|á»³|á»·|á»¹|á»µ/gi, 'y');
  slug = slug.replace(/Ä‘/gi, 'd');
  slug = slug.replace(/á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
  slug = slug.replace(/đ/gi, 'd');
  slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
  slug = slug.replace(/í|ì|ỉ|ĩ|ị/gi, 'i');
  slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
  slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
  slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
  slug = slug.replace(/ /gi, "-");
  slug = slug.replace(/\-\-\-\-\-/gi, '-');
  slug = slug.replace(/\-\-\-\-/gi, '-');
  slug = slug.replace(/\-\-\-/gi, '-');
  slug = slug.replace(/\-\-/gi, '-');
  slug = '@' + slug + '@';
  slug = slug.replace(/\@\-|\-\@|\@/gi, '');

  return slug;
}

function format_number(x){
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function generate_str(n) {
  var code = "";
  var str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  for (var i = 0; i < n; i++)
    code += str.charAt(Math.floor(Math.random() * str.length));

  return code;
}
