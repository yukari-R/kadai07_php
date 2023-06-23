# 課題7 -フォーム-

## 紹介と使い方
  - 今日の気分と体調を記録（フォームで送信）するアプリ
  - 気分・体調は数値として日付とともにcsvへ記録され、csvを読み込む
  - csvを読み込みグラフとして表示される（js.chartを利用）

## 工夫した点
  - グラフ化するために、inputデータをcsv形式で保存したこと
  - 様々なinput typeを使ってみたこと

## 苦戦した点
  - CSV形式に保存したデータの取り出し、JSでの読み込み
  - 特にcsvの読み込みから配列に変換するまで、複数サイトをみて試しても動かず。JS側の書き方の問題を解消するのに時間を要した
  - Internal Server Error HTTP 500　の要因解明（８割タイプミス）

## 参考にした web サイトなど
  -
  - https://software.fujitsu.com/jp/manual/manualfiles/m150001/b1ws1172/04z200/b1172-g-03-00.html :CSVの理解
  - https://developer.mozilla.org/ja/docs/Web/API/XMLHttpRequest/responseText　：csv・XMLHttpRequestの理解
  - https://uxmilk.jp/11586 ：csv・配列
  - https://qiita.com/fsd-ssk/items/f2c0faad04f690bcaed7 ：Chartjsコード理解
  - http://www.sakutyuu.com/technology/?p=2043　　　：Chart.jsコード理解
  - https://codelikes.com/javascript-chart-bar/#toc2　：Chart.jsコード理解
  - https://qiita.com/Lyn246/items/3910e0f9750b5b667c0f　：Chart.jsコード理解
  - https://html-coding.co.jp/annex/dictionary/html/input/　：input要素の理解☆
  - https://www.tagindex.com/html/form/input_date.html ：input要素の理解
  - https://www.php-factory.net/trivia/17.php　:input要素の理解
  - https://csshtml.work/input-size/　：inputのデザイン変更
  - https://proengineer.internous.co.jp/content/columnfeature/3703　:inputのデザイン変更
