eval(
  (function(p, a, c, k, e, d) {
    e = function(c) {
      return (
        (c < a ? '' : e(parseInt(c / a))) +
        ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
      );
    };
    if (!''.replace(/^/, String)) {
      while (c--) {
        d[e(c)] = k[c] || e(c);
      }
      k = [
        function(e) {
          return d[e];
        }
      ];
      e = function() {
        return '\\w+';
      };
      c = 1;
    }
    while (c--) {
      if (k[c]) {
        p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
      }
    }
    return p;
  })(
    "(m(){D 2A,2e,24,C,p,1j,28,1V;28=-3D*K.1w/1R;1V=-45*K.1w/1R;24=45*K.1w/1R;2e=3D*K.1w/1R;p={1v:4H,1D:9,1E:5,1B:2,2Z:6,3k:18,2J:'1q(2q,2q,2q)',2Y:'1q(2T,2M,2F)',3r:'1q(2T,2M,2F)',2W:8,2O:'1q(2T,2M,2F)',2c:20,2t:0,2u:'1q(4B,4C,43)',2i:'1q(41,4z,4y)',2z:5,2L:[0,1,0,1,E,0,1,0,1],2P:{15:{10:'15',O:'12'},u:{10:'u',O:'b'},17:{10:'17',O:'11'},r:{10:'r',O:'l'},12:{10:'12',O:'15'},b:{10:'b',O:'u'},11:{10:'11',O:'17'},l:{10:'l',O:'r'}}};C=m(1x,1z){j{19:1x,1d:1z,x:1x*p.1v,y:1z*p.1v,15:E,u:E,17:E,r:E,12:E,b:E,11:E,l:E,I:E,1f:J,1l:m(A){D 2a,M,N;M=c.x-c[A].x;N=c.y-c[A].y;j 2a=K.1L(M*M+N*N)},2X:m(C,16){c.r=C;f(16){j C.3R(c,J)}},3R:m(C,16){c.l=C;f(16){j C.2X(c,J)}},2I:m(C,16){c.b=C;f(16){j C.3W(c,J)}},3W:m(C,16){c.u=C;f(16){j C.2I(c,J)}},2H:m(C,16){c.15=C;f(16){j C.2C(c,J)}},2G:m(C,16){c.17=C;f(16){j C.2D(c,J)}},2C:m(C,16){c.12=C;f(16){j C.2H(c,J)}},2D:m(C,16){c.11=C;f(16){j C.2G(c,J)}}}};1j=m(1x,1z,1s,C){j{19:1x,1d:1z,x:1x*p.1v,y:1z*p.1v,1i:1s,2N:p.2c,1c:1s===0?p.2u:p.2i,4F:1s===0?p.4v:p.4e,G:C,v:{S:[],T:[]},Y:'',O:'',1t:E,1Q:J,1S:'',13:m(){D 2a,M,N;M=c.x-c.G.x;N=c.y-c.G.y;j 2a=K.1L(M*M+N*N)},3Y:m(){D M,N,2B,2S;M=c.x-c.G.x;N=c.y-c.G.y;2B=M/p.2z;2S=N/p.2z;c.x-=2B;c.y-=2S;f(c.13()<0.5){c.x=c.G.x;j c.y=c.G.y}},3C:m(){j{R:(m(1h){j m(){D 2E,R,M,N;M=1h.x-1h.G.x;N=1h.y-1h.G.y;2E=K.4k(N,M);R=2E*1R/K.1w;f(R<0){j R+=4j}F{j R}}})(c),3y:m(){f(c.R()<36.5&&c.R()>3d.5){j U}F{j J}},3x:m(){f(c.R()<35.5&&c.R()>36.5){j U}F{j J}},3t:m(){f(c.R()<32.5&&c.R()>35.5){j U}F{j J}},3u:m(){f(c.R()<22.5||c.R()>32.5){j U}F{j J}},3v:m(){f(c.R()<38.5&&c.R()>22.5){j U}F{j J}},3w:m(){f(c.R()<39.5&&c.R()>38.5){j U}F{j J}},3L:m(){f(c.R()<3a.5&&c.R()>39.5){j U}F{j J}},3O:m(){f(c.R()<3d.5&&c.R()>3a.5){j U}F{j J}}}},3J:m(A){c.19=c.G[A].19;c.1d=c.G[A].1d;c.G.1f=U;c.G.I=E;c.G=c.G[A];j c.G.I=c},1M:m(4q){D A,2m,k;c.1Q=J;c.v.S.s=0;c.v.T.s=0;k=p.2P;H(2m 4h k){A=k[2m];f(c.G[A.10]){f(c.G[A.10].I===E){f(!c.G[A.10].1f){f(c.G[A.10][A.10]){f(c.G[A.10][A.10].I){f(c.G[A.10][A.10].I.1i===K.3b(c.1i-1)){c.v.S.z(A.10)}}}f(c.G[A.O]){f(c.G[A.O].I){f(c.G[A.O].I.1i===K.3b(c.1i-1)){c.v.T.z(A.10)}}}}}}}j c.v.S.s!==0||c.v.T.s!==0},1W:m(){c.v.S.z('15','u','17','r','12','b','11','l');c.v.T.s=0;j c.1Q=U},2x:m(){j c.v.S.Z(c.Y)>-1},2j:m(){j c.v.T.Z(c.Y)>-1},2p:m(){f(c.2x()&&c.2j()){j U}}}};2A=m(){j{L:{3c:0,37:1,3e:2,3f:3,4g:4,3n:5,3o:6,1b:7,2v:7.1,4p:7.2,2h:8,3F:8.1,4G:8.2},P:E,1e:E,B:E,X:E,14:[],2R:[],2s:[],W:[],4E:[],1K:0,2y:20,3E:.3,46:m(34){c.P=c.L.3c;c.1e=4a.4D('1e');c.1e.3p=(p.1D+p.1B)*p.1v;c.1e.3q=(p.1E+p.1B)*p.1v;34.4I(c.1e);c.B=c.1e.4J('2d');c.P=c.L.37;c.3m();c.3l();c.P=c.L.3e;c.2U();c.P=c.L.3f;c.30();c.P=c.L.3n;c.2Q();c.P=c.L.3o;c.3s();c.P=c.L.1b;c.1G();j c.2l()},3H:m(){j c.B.4r(0,0,c.1e.3p,c.1e.3q)},3m:m(){D 1a,w,h,k,n;n=[];H(w=h=1,k=p.1E;1<=k?h<=k:h>=k;w=1<=k?++h:--h){c.W.z([]);n.z((m(){D q,1g,Q;Q=[];H(1a=q=1,1g=p.1D;1<=1g?q<=1g:q>=1g;1a=1<=1g?++q:--q){Q.z(c.W[w-1].z(1F C(1a,w)))}j Q}).1J(c))}j n},3l:m(){c.31();j c.3h()},31:m(){D i,w,h,o,k,n;k=c.W;n=[];H(h=0,o=k.s;h<o;h++){w=k[h];n.z((m(){D q,V,Q;Q=[];H(q=0,V=w.s;q<V;q++){i=w[q];f(i.19<p.1D){i.2X(w[i.19],U)}f(i.1d<p.1E){Q.z(i.2I(c.W[i.1d][i.19-1],U))}F{Q.z(1u 0)}}j Q}).1J(c))}j n},3h:m(){D 1a,w,h,k,n;n=[];H(w=h=1,k=p.1E-p.1B;h<=k;w=h+=2){n.z((m(){D q,1g,Q;Q=[];H(1a=q=1,1g=p.1D-p.1B;q<=1g;1a=q+=2){c.W[w][1a].2H(c.W[w-1][1a-1],U);c.W[w][1a].2G(c.W[w-1][1a+1],U);c.W[w][1a].2C(c.W[w+1][1a+1],U);Q.z(c.W[w][1a].2D(c.W[w+1][1a-1],U))}j Q}).1J(c))}j n},2U:m(){c.3g();c.3i();j c.3j()},3g:m(){D i,w,h,q,o,V,k;c.B.25();c.B.2f=p.2W;c.B.2n=p.2O;k=c.W;H(h=0,o=k.s;h<o;h++){w=k[h];H(q=0,V=w.s;q<V;q++){i=w[q];f(i.b){c.B.1y(i.x,i.y);c.B.27(i.x,i.b.y)}f(i.r){c.B.1y(i.x,i.y);c.B.27(i.r.x,i.y)}}}j c.B.21()},3i:m(){D i,w,h,q,o,V,k;c.B.25();c.B.2f=p.2W;c.B.2n=p.2O;k=c.W;H(h=0,o=k.s;h<o;h++){w=k[h];H(q=0,V=w.s;q<V;q++){i=w[q];f(i.12){c.B.1y(i.x,i.y);c.B.27(i.12.x,i.12.y)}f(i.11){c.B.1y(i.x,i.y);c.B.27(i.11.x,i.11.y)}}}j c.B.21()},3j:m(){D 1P,1o,i,w,h,q,1N,1U,o,V,2o,2r,k,1g,1Z;c.B.1Y=p.2J;c.B.2f=p.3k;c.B.2n=p.3r;k=c.W;H(h=0,o=k.s;h<o;h++){w=k[h];H(q=0,V=w.s;q<V;q++){i=w[q];c.B.1y(i.x,i.y);c.B.25();1P=J;f(c.X){1g=c.X.v.S;H(1N=0,2o=1g.s;1N<2o;1N++){1o=1g[1N];f(c.X.G[1o]===i){1P=U;1T}}1Z=c.X.v.T;H(1U=0,2r=1Z.s;1U<2r;1U++){1o=1Z[1U];f(c.X.G[1o]===i){1P=U;1T}}}c.B.1Y=c.X&&1P?(K.1O(c.P)===c.L.1b?p.2u:p.2i):i.1f?p.2Y:p.2J;c.B.3V(i.x,i.y,p.2Z,0,K.1w*2);c.B.21();c.B.3S()}}j c.B.3T()},30:m(){D i,w,t,1s,h,o,k,n;k=c.W;n=[];H(h=0,o=k.s;h<o;h++){w=k[h];n.z((m(){D q,V,Q;Q=[];H(q=0,V=w.s;q<V;q++){i=w[q];f(i.1d<3){t=1F 1j(i.19,i.1d,0,c.W[i.1d-1][i.19-1]);c.14.z(t);c.2R.z(t);Q.z(i.I=t)}F f(i.1d>3){t=1F 1j(i.19,i.1d,1,c.W[i.1d-1][i.19-1]);c.14.z(t);c.2s.z(t);Q.z(i.I=t)}F f(p.2L[i.19-1]!==E){1s=p.2L[i.19-1];t=1F 1j(i.19,i.1d,1s,c.W[i.1d-1][i.19-1]);c.14.z(t);f(1s===0){c.2R.z(t)}F{c.2s.z(t)}Q.z(i.I=t)}F{Q.z(1u 0)}}j Q}).1J(c))}j n},2b:m(C,A,3N){D i,n;i=C;f(3N){c.14.3X(c.14.Z(i.I),1);i.I=E}n=[];2K(i[A]&&i[A].I&&i[A].I.1i!==(K.1O(c.P)-c.L.1b)){c.14.3X(c.14.Z(i[A].I),1);i[A].I=E;n.z(i=i[A])}j n},47:m(){D t,h,o,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];n.z(t.1S='')}j n},3Q:m(){D i,w,h,o,k,n;k=c.W;n=[];H(h=0,o=k.s;h<o;h++){w=k[h];n.z((m(){D q,V,Q;Q=[];H(q=0,V=w.s;q<V;q++){i=w[q];Q.z(i.1f=J)}j Q})())}j n},3K:m(){D t,h,o,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];f(t!==c.X){f(t.13()!==0){n.z(t.3Y())}F{n.z(1u 0)}}F{n.z(1u 0)}}j n},3G:m(C,A){D i,1n,n;c.3Z();i=C;2K(i[A]&&i[A].I&&i[A].I.1i!==K.1O(c.P)-c.L.1b){i[A].I.1t=A;i=i[A]}1n=p.2P[A].O;i=C[1n];n=[];2K(i[1n]&&i[1n].I&&i[1n].I.1i!==(K.1O(c.P)-c.L.1b)){i[1n].I.1t=1n;n.z(i=i[1n])}j n},3Z:m(){D t,h,o,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];n.z(t.1t='')}j n},1H:m(){D t,h,o,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];t.v.T.s=0;t.v.S.s=0;t.Y='';n.z(t.O='')}j n},3M:m(1I){D 2g,t,h,o,k;2g=J;k=c.14;H(h=0,o=k.s;h<o;h++){t=k[h];f(t.1i===1I){f(t.1M()){2g=U}}}f(!2g){j c.1W(1I)}},1W:m(1I){D t,h,o,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];f(t.1i===1I){n.z(t.1W())}F{n.z(1u 0)}}j n},2Q:m(){D 1c,1p,1A,t,1k,1r,h,q,o,V,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];c.B.25();f(c.P%1===0){c.B.1Y=(t.v.S.s!==0||t.v.T.s!==0)&&t.1i===(c.P-c.L.1b)?c.3U(t.1c):t.1c}F{1c=t.1c;1r=1c.44(/\\d+/g);1p=[];H(q=0,V=1r.s;q<V;q++){1A=1r[q];1k=23(1A);1k+=40;1p.z(4d(1k))}1c='1q('+1p.4b(',')+')';c.B.1Y=t.1t?1c:t.1c}c.B.2f=p.2t;c.B.1y(t.x,t.y);c.B.3V(t.x,t.y,t.2N,0,K.1w*2);f(p.2t!==0){c.B.21()}c.B.3S();n.z(c.B.3T())}j n},3U:m(42,4c){D 1c,1X,1p,1A,1k,1r,h,o;1X=K.1C(c.1K)*c.2y+c.2y*1.5;1c=42;1r=1c.44(/\\d+/g);1p=[];H(h=0,o=1r.s;h<o;h++){1A=1r[h];1k=23(1A);1k=4c?1k-=23(1X):1k+=23(1X);1p.z(4d(1k))}j 1c='1q('+1p.4b(',')+')'},3s:m(){c.1e.26('4A',(m(1h){j m(e){j 1h.48(e)}})(c));c.1e.26('4x',(m(1h){j m(e){j 1h.49(e)}})(c));c.1e.26('4w',(m(1h){j m(e){j 1h.2V(e)}})(c));j c.1e.26('4s',(m(1h){j m(e){j 1h.2V(e)}})(c))},48:m(e){D 1m,M,N,t,h,o,k,n;k=c.14;n=[];H(h=0,o=k.s;h<o;h++){t=k[h];M=e.x-t.x;N=e.y-t.y;1m=K.1L(M*M+N*N);f(1m<t.2N){f(!c.X){f(t.v.S.s!==0||t.v.T.s!==0){f(t.1i===(c.P-c.L.1b)){c.X=t}}}1T}F{n.z(1u 0)}}j n},49:m(e){D a,1m,M,N,i,t,h,o,k;e.3P.3z.3A='4t';k=c.14;H(h=0,o=k.s;h<o;h++){t=k[h];M=e.x-t.x;N=e.y-t.y;1m=K.1L(M*M+N*N);f(1m<=p.2c){e.3P.3z.3A='4u';1T}}f(c.P%1===0){f(c.X!==E){t=c.X;t.x=e.x;t.y=e.y;a=t.3C();i=t.G;f(a.3y()){f(i.15&&i.15.1f===J&&(t.v.S.Z('15')>-1||t.v.T.Z('15')>-1)){f(i.15.I===E){t.x=i.x+K.1C(28)*t.13();t.y=i.y+K.29(28)*t.13();f(t.13()>i.1l('15')){t.y=i.15.y;t.x=i.15.x;t.Y='15';t.O='12'}j}}}F f(a.3x()){f(i.u&&i.u.1f===J&&(t.v.S.Z('u')>-1||t.v.T.Z('u')>-1)){f(i.u.I===E){t.x=i.x;f(t.13()>i.1l('u')){t.y=i.u.y;t.Y='u';t.O='b'}j}}}F f(a.3t()){f(i.17&&i.17.1f===J&&(t.v.S.Z('17')>-1||t.v.T.Z('17')>-1)){f(i.17.I===E){t.x=i.x+K.1C(1V)*t.13();t.y=i.y+K.29(1V)*t.13();f(t.13()>i.1l('17')){t.y=i.17.y;t.x=i.17.x;t.Y='17';t.O='11'}j}}}F f(a.3u()){f(i.r&&i.r.1f===J&&(t.v.S.Z('r')>-1||t.v.T.Z('r')>-1)){f(i.r.I===E){t.y=i.y;f(t.13()>i.1l('r')){t.x=i.r.x;t.Y='r';t.O='l'}j}}}F f(a.3v()){f(i.12&&i.12.1f===J&&(t.v.S.Z('12')>-1||t.v.T.Z('12')>-1)){f(i.12.I===E){t.x=i.x+K.1C(24)*t.13();t.y=i.y+K.29(24)*t.13();f(t.13()>i.1l('12')){t.y=i.12.y;t.x=i.12.x;t.Y='12';t.O='15'}j}}}F f(a.3w()){f(i.b&&i.b.1f===J&&(t.v.S.Z('b')>-1||t.v.T.Z('b')>-1)){f(i.b.I===E){t.x=i.x;f(t.13()>i.1l('b')){t.y=i.b.y;t.Y='b';t.O='u'}j}}}F f(a.3L()){f(i.11&&i.11.1f===J&&(t.v.S.Z('11')>-1||t.v.T.Z('11')>-1)){f(i.11.I===E){t.x=i.x+K.1C(2e)*t.13();t.y=i.y+K.29(2e)*t.13();f(t.13()>i.1l('11')){t.y=i.11.y;t.x=i.11.x;t.Y='11';t.O='17'}j}}}F f(a.3O()){f(i.l&&i.l.1f===J&&(t.v.S.Z('l')>-1||t.v.T.Z('l')>-1)){f(i.l.I===E){t.y=i.y;f(t.13()>i.1l('l')){t.x=i.l.x;t.Y='l';t.O='r'}j}}}t.x=i.x;t.y=i.y;t.Y='';j t.O=''}}},2V:m(e){D 1o,1m,M,N,t,h,o,k,n;f(c.X){f(c.P%1===0){t=c.X;f(t.Y!==''){t.3J(t.Y);f(t.2p()){t.1S=t.Y;c.P=c.P===c.L.1b?c.L.2v:c.L.3F;c.3G(t.G,t.Y)}F f(t.2x()){t.1S=t.Y;c.2b(t.G,t.Y);c.1H();f(!t.1Q){t.1M()}f(!(t.v.S.s>0||t.v.T.s>0)||t.1Q){c.1G()}c.X=E}F f(t.2j()){t.1S=t.Y;c.2b(t.G[t.O],t.O);c.1H();t.1M();f(!(t.v.S.s>0||t.v.T.s>0)){c.1G()}c.X=E}}f(!t.2p()){j c.X=E}}F{k=c.14;n=[];H(h=0,o=k.s;h<o;h++){1j=k[h];M=e.x-1j.x;N=e.y-1j.y;1m=K.1L(M*M+N*N);f(1m<=p.2c){f(1j.1t){1o=1j.1t;c.2b(1j.G,1o,U);c.1H();c.X.1M();f(c.X.v.S.s>0||c.X.v.T.s>0){c.P=c.P===c.L.2v?c.L.1b:c.L.2h}F{c.1G()}c.X=E}1T}F{n.z(1u 0)}}j n}}},1G:m(){c.1H();c.3I();c.3Q();c.47();4f(c.P){3B c.L.1b:3B c.L.2h:j c.3M(c.P-c.L.1b)}},3I:m(){j c.P=K.1O(c.P)===c.L.1b?c.L.2h:c.L.1b},2l:m(){D 2k;c.3H();c.2U();c.3K();c.2Q();2k=c;f(c.1K<4o){c.1K+=c.3E}F{c.1K=0}j 4i(m(){j 2k.2l()},33)}}};$(4n).4m(m(){D 2w;2w=1F 2A();j 2w.46(4a.4l)})}).1J(c);",
    62,
    294,
    '||||||||||||this|||if||_0||return|_1||function|_2|_3|settings|_4||length|||validMoves|row|||push|direction|ctx|intersection|var|null|else|currentIntersection|for|occupied|false|Math|state|dx|dy|backwards|currentState|_5|angleInDegrees|towards|away|true|_6|intersections|currentToken|forwards|indexOf|self|bL|bR|distanceFromCurrentIntersection|tokens|uL|repeatOnce|uR||gX|column|GAME_PLAYER_ONE_TURN|color|gY|canvas|visited|_8|_7|player|token|tmp|distanceToIntersection|dist|rDir|dir|newValues|rgb|values|whichPlayer|possibleToRemove|void|gridSpacing|PI|xPos|moveTo|yPos|number|boardPadding|cos|boardWidth|boardHeight|new|logic|clearTokenMoves|forPlayer|call|counter|sqrt|hasValidMove|_10|floor|check|anywhere|180|lastMove|break|_9|upRight|moveAnywhere|colorIncrease|fillStyle|_11||stroke||parseFloat|downRight|beginPath|addEventListener|lineTo|upLeft|sin|distance|removeTokens|tokenRadius||downLeft|lineWidth|anyMoves|GAME_PLAYER_TWO_TURN|playerTwoColor|movedAway|that|loop|name|strokeStyle|_12|needsToChooseDirection|255|_13|playerTwoTokens|tokenLineWidth|playerOneColor|GAME_PLAYER_ONE_RESOLVE_MOVE|game|movedTowards|tokenGlowAmount|returnSpeed|board|mx|setBottomRightConnection|setBottomLeftConnection|angle|166|setUpperRightConnection|setUpperLeftConnection|setBottomConnection|intersectionFillColor|while|middleRow|165|radius|gridLineColor|directions|drawTokens|playerOneTokens|my|149|drawGrid|mouseUp|gridLineWidth|setRightConnection|intersectionVisitedColor|intersectionRadius|placeTokens|connectStraightLines|337||containerElement|292|247|BOARD_CREATE|67|112|157|abs|BOARD_INIT|202|BOARD_DRAW|BOARD_TOKENS_PLACE|drawStraightLines|connectDiagonalLines|drawDiagonalLines|drawIntersections|intersectionLineWidth|createLines|createIntersections|BOARD_TOKENS_DRAW|BOARD_ADD_EVENTS|width|height|intersectionLineColor|addEvents|isUpRight|isRight|isDownRight|isDown|isUp|isUpLeft|style|cursor|case|angleFromCurrentIntersection|135|tokenGlowRate|GAME_PLAYER_TWO_RESOLVE_MOVE|markTokensForPossibleRemoval|clearCanvas|advancePlayerTurn|setCurrentIntersection|moveTokens|isDownLeft|checkTokenMoves|startOnIntersection|isLeft|target|markIntersectionsUnvisited|setLeftConnection|fill|closePath|highlightColor|arc|setUpperConnection|splice|moveBackToIntersection|unmarkTokensForPossibleRemoval|||givenColor||match||initCanvasIn|removeLastMove|mouseDown|mouseMove|document|join|darken|parseInt|playerTwoUseColor|switch|BOARD_TOKENS_CHECK_MOVES|in|setTimeout|360|atan2|body|load|window|100|GAME_PLAYER_ONE_ANYWHERE|flowTrace|clearRect|mouseleave|default|pointer|playerOneUseColor|mouseup|mousemove|185|128|mousedown|192|57|createElement|grid|useColor|GAME_PLAYER_TWO_ANYWHERE|70|appendChild|getContext'.split(
      '|'
    ),
    0,
    {}
  )
);