window.onload = function () {
    var el = document.getElementById("editor");
    var version = "# version: Python3
  
  ";
    var codeAreaTip = "# please edit your code here:
  ";
    var codeStart = "# code start
  
  ";
    var codeEnd = "# code end
  
  ";
    var codeTip = "'''
  This function is the entry of this program and
  it must be return your answer of current question.
  '''
  ";
    var code = "def solution():
  \tpass";
    var initValue = version + codeAreaTip + codeStart + codeEnd + codeTip + code;
    var myCodeMirror = CodeMirror.fromTextArea(el, {
      mode: "python", //     
      theme: "leetcode", //   
      keyMap: "sublime", //      
      lineNumbers: true, //     
      smartIndent: true, //     
      indentUnit: 4, //        4     
      indentWithTabs: true, //            
      lineWrapping: true, // 
      //            、   、     
      gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter", "CodeMirror-lint-markers"], 
      foldGutter: true, //           
      autofocus: true, //     
      matchBrackets: true, //       ，  "]、}"
      autoCloseBrackets: true, //       
      styleActiveLine: true, //         
    });
    //       ，        fromTextArea   
    myCodeMirror.setOption("value", initValue);
    //        
    myCodeMirror.on("keypress", function() {
      //       
      myCodeMirror.showHint(); //   ，   CodeMirror  show-hint.js 131    （       ，        ）
    });
    var test = document.getElementById("test");
    test.onclick = function() {
      var value = myCodeMirror.getValue();
      axios.post("http://localhost/api/runcode", {
        code: value
      }).then(function(res) {
        console.log(res);
      });
    };
  };