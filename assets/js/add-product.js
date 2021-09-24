ZC.LICENSE = ['7b185ca19b4be2cba68fdcd369c663a9'];

var smallData1 = [224, 259, 265, 233, 300, 312, 269];
var mediumData1 = [224, 259, 265, 233, 300, 312, 269, 345, 293, 245, 316, 350, 227, 234];
var largeData1 = [224, 259, 265, 233, 300, 312, 269, 345, 293, 245, 316, 350, 227, 234, 244, 219, 235, 273, 240, 331, 245, 371, 233, 215, 326, 320, 327, 334];

var smallData2 = [204, 205, 215, 202, 225, 287, 222];
var mediumData2 = [204, 205, 215, 202, 225, 287, 222, 301, 254, 205, 268, 304, 205, 198];
var largeData2 = [204, 205, 215, 202, 225, 287, 222, 301, 254, 205, 268, 304, 205, 198, 224, 205, 205, 232, 225, 267, 202, 321, 224, 205, 248, 314, 215, 178];

var chartOneData = {
  type: 'area',
  globals: {
    fontFamily: 'Roboto'
  },
  tooltip: {
    visible: false
  },
  plot: {
    aspect: 'spline'
  },
  legend: {
    align: 'center',
    borderColor: 'transparent',
    layout: '1x0'
  },
  plotarea: {
    margin: '32px 0px 0px 0px'
  },
  scaleX: {
    visible: false
  },
  scaleY: {
    lineWidth: 0,
    guide: {
      visible: false
    },
    tick: {
      visible: false
    },
    item: {
      offsetX: 50,
      offsetY: -10,
    }
  },
  scaleY2: {
    values: '0:400:100',
    lineWidth: 0,
    guide: {
      visible: false
    },
    tick: {
      visible: false
    },
    item: {
      offsetX: -50,
      offsetY: -10,
    }
  },
  series: [
    {
      values: smallData1,
      text: 'Munich',
      backgroundColor: 'var(--turqoise)',
      lineColor: 'var(--turqoise)',
      alphaArea: '.9',
      marker: {
        visible: false
      }
    },
    {
      values: smallData2,
      text: 'Berlin',
      backgroundColor: 'var(--purple)',
      lineColor: 'var(--purple)',
      alphaArea: '.9',
      marker: {
        visible: false
      }
    }
  ]
};

zingchart.render({
  id: "chartOne",
  data: chartOneData,
  height: '100%',
  width: '100%'
});

document.addEventListener('DOMContentLoaded', function() {
  var profilePicture = document.querySelector('#profile-picture');
  var profileMenu = document.querySelector('#profile-menu');
  var barMenu = document.querySelector('#bars');
  var mobileMenu = document.querySelector('#mobile-menu');
  var closeMenu = document.querySelector('#close');
  var searchIcon = document.querySelector('#search');
  var form = document.querySelector('#form');
  var btn = document.querySelectorAll('.btn');

  profilePicture.addEventListener('click', function(e) {
    if(e.target.id == 'profile-picture') {
      profileMenu.classList.toggle('open');
    }
  });

  barMenu.addEventListener('click', function(e) {
    if (e.target.id == 'bars') {
     mobileMenu.classList.add('open'); 
    } 
  });

  closeMenu.addEventListener('click', function(e) {
    if (e.target.id == 'close') {
      mobileMenu.classList.remove('open');
    }
  });

  searchIcon.addEventListener('click', function(e) {
    if (e.target.id == 'search') {
      form.classList.toggle('open');
      var input = form.querySelector('input[type="text"]');
      input.focus();
      console.log(input);
      searchIcon.classList.toggle('fa-times');
    }
  });

  function getSiblings (elem) {
      var siblings = [];
      var sibling = elem.parentNode.firstChild;
      for (; sibling; sibling = sibling.nextSibling) {
        if (sibling.nodeType !== 1 || sibling === elem)                 
          continue;
        siblings.push(sibling);
      }
    return siblings;
  }

  btn.forEach(function(curBtn) {
    curBtn.addEventListener('click', function(e) {
      this.classList.add('active');

      if (this.innerHTML == '7 Days') {
        zingchart.exec("chartOne", "setseriesvalues", {
          values: [smallData1, smallData2]
        });
      } else if (this.innerHTML == '14 Days') {
        zingchart.exec("chartOne", "setseriesvalues", {
          values: [mediumData1, mediumData2]
        });
      } else {
        zingchart.exec("chartOne", "setseriesvalues", {
          values: [largeData1, largeData2]
        });
      }

      var siblings = getSiblings(this);
      siblings.forEach(function(curSibling) {
        curSibling.classList.remove('active');
      });
    });
  });
}, false);