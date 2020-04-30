import '../../components/base/base'
import './article.scss'


window.share = {
    vkontakte: function(purl, ptitle, pimg, text) {
        let url  = 'http://vkontakte.ru/share.php?';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&description=' + encodeURIComponent(text);
        url += '&image='       + encodeURIComponent(pimg);
        url += '&noparse=true';
        this.popup(url);
    },
    odnoklassniki: function(purl, ptitle, pimg) {
        let url  = 'https://connect.ok.ru/offer';
        url += '?title='    + encodeURIComponent(ptitle);
        url += '&url='    + encodeURIComponent(purl);
        url += '&imageUrl='    + encodeURIComponent(pimg);
        this.popup(url);
    },
    facebook: function(purl, ptitle, pimg, text) {
        let url  = 'http://www.facebook.com/sharer.php?s=100';
        url += '&p[title]='     + encodeURIComponent(ptitle);
        url += '&p[summary]='   + encodeURIComponent(text);
        url += '&p[url]='       + encodeURIComponent(purl);
        url += '&p[images][0]=' + encodeURIComponent(pimg);
        this.popup(url);
    },
    twitter: function(purl, ptitle) {
        let url  = 'https://twitter.com/share?';
        url += 'text='      + encodeURIComponent(ptitle);
        url += '&url='      + encodeURIComponent(purl);
        url += '&counturl=' + encodeURIComponent(purl);
        this.popup(url);
    },
    mailru: function(purl, ptitle, pimg, text) {
        let url  = 'https://connect.mail.ru/share?';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&description=' + encodeURIComponent(text);
        url += '&imageurl='    + encodeURIComponent(pimg);
        this.popup(url)
    },
    linkedin: function(purl, ptitle) {
        let url  = 'https://www.linkedin.com/shareArticle?';
        url += 'mini='          + 'true';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&summary=' + encodeURIComponent(ptitle);
        url += '&source='    + 'BiXBiT';
        this.popup(url)
    },

    popup: function(url) {
        window.open(url,'','toolbar=0,status=0,width=626,height=436');
    }
};
